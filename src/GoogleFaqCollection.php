<?php
namespace Germania\GoogleStructuredData;

class GoogleFaqCollection implements GoogleStructuredDataInterface
{

    /**
     * @var string
     */
    public $context = "https://schema.org";


    /**
     * @var string
     */
    public $type = "FAQPage";


    /**
     * @var array
     */
    public $mainEntity = array();


    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return array(
            "@context" => $this->context,
            "@type" => $this->type,
            "mainEntity" => $this->mainEntity
        );
    }



    /**
     * Adds a FAQ answer.
     *
     * @param  GoogleFaqQuestion $question
     * @return GoogleFaqCollection
     */
    public function push(GoogleFaqQuestion $question) : GoogleFaqCollection
    {
        $this->mainEntity[] = $question;
        return $this;
    }



    public static function createFromArray(array $questions) : GoogleFaqCollection
    {
        $result = new static;
        foreach ($questions as $qa) {
            $q = GoogleFaqQuestion::createFromArray($qa);
            $result->push($q);
        }
        return $result;
    }
}
