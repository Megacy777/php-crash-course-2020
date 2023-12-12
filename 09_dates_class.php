<?php
class MyDateTime
{
    /** @var DateTime */
    private $dateTime;
    /**
     * Constructor: Initializes the MyDateTime object with the current date and time.
     */
    public function __construct()
    {
        $this->dateTime = new DateTime();
    }

    /**
     * Set the date and time from a string representation.
     *
     * @param string $dateTimeString
     * @return $this
     */
    public function setFromString($dateTimeString)
    {
        $this->dateTime->setTimestamp(strtotime($dateTimeString));
        return $this;
    }

    /**
     * Format the date and time as a string.
     *
     * @param string $format
     * @return string
     */
    public function format($format = 'Y-m-d H:i:s')
    {
        return $this->dateTime->format($format);
    }

    /**
     * Add a specified number of days to the date.
     *
     * @param int $days
     * @return $this
     */
    public function addDays($days)
    {
        $this->dateTime->modify("+{$days} days");
        return $this;
    }

    /**
     * Subtract a specified number of days from the date.
     *
     * @param int $days
     * @return $this
     */
    public function subDays($days)
    {
        $this->dateTime->modify("-{$days} days");
        return $this;
    }

    /**
     * Get the Unix timestamp representing the date and time.
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->dateTime->getTimestamp();
    }
}

// Example usage:

// Create a new MyDateTime object
$myDateTime = new MyDateTime();

// Set the date and time from a string
$myDateTime->setFromString('2023-01-01 12:00:19');

// Add 5 days
$myDateTime->addDays(5);

// Display the formatted date and time
echo 'Formatted Date and Time: ' . $myDateTime->format() . PHP_EOL;
//
//// Get the Unix timestamp
//echo 'Unix Timestamp: ' . $myDateTime->getTimestamp() . PHP_EOL;
//
//// Subtract 2 days
//$myDateTime->subDays(2);
//
//// Display the updated formatted date and time
//echo 'Updated Formatted Date and Time: ' . $myDateTime->format() . PHP_EOL;
