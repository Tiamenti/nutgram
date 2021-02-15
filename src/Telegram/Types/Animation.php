<?php

namespace SergiX44\Nutgram\Telegram\Types;

/**
 * This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
 * @see https://core.telegram.org/bots/api#animation
 */
class Animation
{
    /**
     * Identifier for this file
     * @var string $file_id
     */
    public $file_id;
    
    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @var string $file_unique_id
     */
    public $file_unique_id;
    
    /**
     * Video width as defined by sender
     * @var int $width
     */
    public $width;
    
    /**
     * Video height as defined by sender
     * @var int $height
     */
    public $height;
    
    /**
     * Duration of the video in seconds as defined by sender
     * @var int $duration
     */
    public $duration;
    
    /**
     * Optional. Animation thumbnail as defined by sender
     * @var PhotoSize $thumb
     */
    public $thumb;
    
    /**
     * Optional. Original animation filename as defined by sender
     * @var string $file_name
     */
    public $file_name;
    
    /**
     * Optional. MIME type of the file as defined by sender
     * @var string $mime_type
     */
    public $mime_type;
    
    /**
     * Optional. File size
     * @var int $file_size
     */
    public $file_size;
}
