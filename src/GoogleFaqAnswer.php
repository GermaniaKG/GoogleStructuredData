<?php
namespace Germania\GoogleStructuredData;

class GoogleFaqAnswer implements GoogleStructuredDataInterface
{


    /**
     * @var string
     */
    public $type = "Answer";


    /**
     * @var string
     */
    public $text;



    /**
     * @param  string $answer Answer string
     */
    public function setText(string $text)
    {
        $this->text = $text;
        return $this;
    }


    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return array(
            "@type" => $this->type,
            "text" => $this->text
        );
    }


    /**
     * @param  string $answer Answer string
     * @return GoogleFaqAnswer
     */
    public static function create(string $answer) : GoogleFaqAnswer
    {
        $q = new static();
        $q->setText($answer);

        return $q;
    }
}
