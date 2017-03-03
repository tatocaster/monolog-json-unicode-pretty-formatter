<?php
namespace Tatocaster\Monolog\Formatter;

use Monolog\Formatter\JsonFormatter;

/**
 * extension of JsonFormatter of Monolog, which pretty prints json and supports unicode. Does not escape slashes.
 */
class JsonPrettyUnicodePrintFormatter extends JsonFormatter
{
    /**
     * {@inheritdoc}
     */
    public function format(array $record)
    {
        return json_encode($record, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . ($this->appendNewline ? "\n" : '');
    }
}
