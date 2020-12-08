<?php
namespace Germania\GoogleStructuredData;

class GoogleFaqQuestion implements GoogleStructuredDataInterface
{

    /**
     * @var string
     */
    public $type = "Question";

    /**
     * @var string
     */
    public $name;

    /**
     * @var GoogleFaqAnswer|null
     */
    public $acceptedAnswer;


    /**
     * @param string $name Question name
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }


    /**
     * Sets accepted answer.
     *
     * @param GoogleFaqAnswer|null $acceptedAnswer
     */
    public function setAcceptedAnswer(?GoogleFaqAnswer $acceptedAnswer)
    {
        $this->acceptedAnswer = $acceptedAnswer;
        return $this;
    }


    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return array(
            "@type" => $this->type,
            "name" => $this->name,
            "acceptedAnswer" => $this->acceptedAnswer
        );
    }


    /**
     * @param  string          $question Question string
     * @param  GoogleFaqAnswer $answer   Accepted answer
     * @return GoogleFaqQuestion
     */
    public static function create(string $question, ?GoogleFaqAnswer $answer) : GoogleFaqQuestion
    {
        $q = new static();
        $q->setName($question);
        $q->setAcceptedAnswer($answer);

        return $q;
    }


    /**
     * Expects an array with `q` and `a` elements.
     *
     * @param  array  $qa
     * @return GoogleFaqQuestion
     */
    public static function createFromArray(array $qa)  : GoogleFaqQuestion
    {
        if (empty($qa['q'])) {
            throw new \UnexpectedValueException("At least 'q' element expected");
        }

        $answer = empty($qa['a']) ? null : GoogleFaqAnswer::create($qa['a']);

        return static::create($qa['q'], $answer);
    }
}
