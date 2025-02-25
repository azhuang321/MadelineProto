<?php declare(strict_types=1);
/**
 * This file is automatic generated by build_docs.php file
 * and is used only for autocomplete in multiple IDE
 * don't modify manually.
 */

namespace danog\MadelineProto\Namespace;

interface Photos
{
    /**
     * Installs a previously uploaded photo as a profile photo.
     *
     * @param bool $fallback If set, the chosen profile photo will be shown to users that can't display your main profile photo due to your privacy settings.
     * @param array|int|string $bot Can contain info of a bot we own, to change the profile photo of that bot, instead of the current user. @see https://docs.madelineproto.xyz/API_docs/types/InputUser.html
     * @param array $id Input photo @see https://docs.madelineproto.xyz/API_docs/types/InputPhoto.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param ?string $queueId If specified, ensures strict server-side execution order of concurrent calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'photos.photo', photo: array{_: 'photoEmpty', id: array}|array{_: 'photo', has_stickers: array, id: array, access_hash: array, file_reference: array, date: array, sizes: list<array>, video_sizes?: list<array>, dc_id: array}, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/photos.Photo.html
     */
    public function updateProfilePhoto(bool|null $fallback = null, array|int|string|null $bot = null, array|null $id = null, ?int $floodWaitLimit = null, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Updates current user profile photo.
     *
     * The `file`, `video` and `video_emoji_markup` flags are mutually exclusive.
     *
     * @param bool $fallback If set, the chosen profile photo will be shown to users that can't display your main profile photo due to your privacy settings.
     * @param array|int|string $bot Can contain info of a bot we own, to change the profile photo of that bot, instead of the current user. @see https://docs.madelineproto.xyz/API_docs/types/InputUser.html
     * @param mixed $file A file name or a file URL. You can also use amphp async streams, amphp HTTP response objects, and [much more](https://docs.madelineproto.xyz/docs/FILES.html#downloading-files)!
     * @param mixed $video A file name or a file URL. You can also use amphp async streams, amphp HTTP response objects, and [much more](https://docs.madelineproto.xyz/docs/FILES.html#downloading-files)!
     * @param float $video_start_ts Floating point UNIX timestamp in seconds, indicating the frame of the video/sticker that should be used as static preview; can only be used if `video` or `video_emoji_markup` is set.
     * @param array{_: 'videoSize', type?: string, w?: int, h?: int, size?: int, video_start_ts?: float}|array{_: 'videoSizeEmojiMarkup', emoji_id?: int, background_colors?: list<int>}|array{_: 'videoSizeStickerMarkup', stickerset?: array{_: 'inputStickerSetEmpty'}|array{_: 'inputStickerSetID', id?: int, access_hash?: int}|array{_: 'inputStickerSetShortName', short_name?: string}|array{_: 'inputStickerSetAnimatedEmoji'}|array{_: 'inputStickerSetDice', emoticon?: string}|array{_: 'inputStickerSetAnimatedEmojiAnimations'}|array{_: 'inputStickerSetPremiumGifts'}|array{_: 'inputStickerSetEmojiGenericAnimations'}|array{_: 'inputStickerSetEmojiDefaultStatuses'}|array{_: 'inputStickerSetEmojiDefaultTopicIcons'}|array{_: 'inputStickerSetEmojiChannelDefaultStatuses'}, sticker_id?: int, background_colors?: list<int>} $video_emoji_markup Animated sticker profile picture, must contain either a [videoSizeEmojiMarkup](https://docs.madelineproto.xyz/API_docs/constructors/videoSizeEmojiMarkup.html) or a [videoSizeStickerMarkup](https://docs.madelineproto.xyz/API_docs/constructors/videoSizeStickerMarkup.html) constructor. @see https://docs.madelineproto.xyz/API_docs/types/VideoSize.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param ?string $queueId If specified, ensures strict server-side execution order of concurrent calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'photos.photo', photo: array{_: 'photoEmpty', id: array}|array{_: 'photo', has_stickers: array, id: array, access_hash: array, file_reference: array, date: array, sizes: list<array>, video_sizes?: list<array>, dc_id: array}, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/photos.Photo.html
     */
    public function uploadProfilePhoto(bool|null $fallback = null, array|int|string|null $bot = null, mixed $file = null, mixed $video = null, float|null $video_start_ts = null, array|null $video_emoji_markup = null, ?int $floodWaitLimit = null, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Deletes profile photos. The method returns a list of successfully deleted photo IDs.
     *
     * @param list<array>|array<never, never> $id Array of Input photos to delete @see https://docs.madelineproto.xyz/API_docs/types/InputPhoto.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param ?string $queueId If specified, ensures strict server-side execution order of concurrent calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return list<int>
     */
    public function deletePhotos(array $id = [], ?int $floodWaitLimit = null, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;

    /**
     * Returns the list of user photos.
     *
     * @param array|int|string $user_id User ID @see https://docs.madelineproto.xyz/API_docs/types/InputUser.html
     * @param int $offset Number of list elements to be skipped
     * @param int $max_id If a positive value was transferred, the method will return only photos with IDs less than the set one
     * @param int $limit Number of list elements to be returned
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param ?string $queueId If specified, ensures strict server-side execution order of concurrent calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @param ?int $takeoutId Optional takeout ID, generated using account.initTakeoutSession, see [the takeout docs](https://core.telegram.org/api/takeout) for more info.
     * @return array{_: 'photos.photos', photos: list<array{_: 'photoEmpty', id: array}|array{_: 'photo', has_stickers: array, id: array, access_hash: array, file_reference: array, date: array, sizes: list<array>, video_sizes?: list<array>, dc_id: array}>, users: list<array|int|string>}|array{_: 'photos.photosSlice', count: int, photos: list<array{_: 'photoEmpty', id: array}|array{_: 'photo', has_stickers: array, id: array, access_hash: array, file_reference: array, date: array, sizes: list<array>, video_sizes?: list<array>, dc_id: array}>, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/photos.Photos.html
     */
    public function getUserPhotos(array|int|string|null $user_id = null, int|null $offset = 0, int|null $max_id = 0, int|null $limit = 0, ?int $floodWaitLimit = null, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null, ?int $takeoutId = null): array;

    /**
     * Upload a custom profile picture for a contact, or suggest a new profile picture to a contact.
     *
     * The `file`, `video` and `video_emoji_markup` flags are mutually exclusive.
     *
     * @param bool $suggest If set, will send a [messageActionSuggestProfilePhoto](https://docs.madelineproto.xyz/API_docs/constructors/messageActionSuggestProfilePhoto.html) service message to `user_id`, suggesting them to use the specified profile picture; otherwise, will set a personal profile picture for the user (only visible to the current user).
     * @param bool $save If set, removes a previously set personal profile picture (does not affect suggested profile pictures, to remove them simply deleted the [messageActionSuggestProfilePhoto](https://docs.madelineproto.xyz/API_docs/constructors/messageActionSuggestProfilePhoto.html) service message with [messages.deleteMessages](https://docs.madelineproto.xyz/API_docs/methods/messages.deleteMessages.html)).
     * @param array|int|string $user_id The contact @see https://docs.madelineproto.xyz/API_docs/types/InputUser.html
     * @param mixed $file A file name or a file URL. You can also use amphp async streams, amphp HTTP response objects, and [much more](https://docs.madelineproto.xyz/docs/FILES.html#downloading-files)!
     * @param mixed $video A file name or a file URL. You can also use amphp async streams, amphp HTTP response objects, and [much more](https://docs.madelineproto.xyz/docs/FILES.html#downloading-files)!
     * @param float $video_start_ts Floating point UNIX timestamp in seconds, indicating the frame of the video/sticker that should be used as static preview; can only be used if `video` or `video_emoji_markup` is set.
     * @param array{_: 'videoSize', type?: string, w?: int, h?: int, size?: int, video_start_ts?: float}|array{_: 'videoSizeEmojiMarkup', emoji_id?: int, background_colors?: list<int>}|array{_: 'videoSizeStickerMarkup', stickerset?: array{_: 'inputStickerSetEmpty'}|array{_: 'inputStickerSetID', id?: int, access_hash?: int}|array{_: 'inputStickerSetShortName', short_name?: string}|array{_: 'inputStickerSetAnimatedEmoji'}|array{_: 'inputStickerSetDice', emoticon?: string}|array{_: 'inputStickerSetAnimatedEmojiAnimations'}|array{_: 'inputStickerSetPremiumGifts'}|array{_: 'inputStickerSetEmojiGenericAnimations'}|array{_: 'inputStickerSetEmojiDefaultStatuses'}|array{_: 'inputStickerSetEmojiDefaultTopicIcons'}|array{_: 'inputStickerSetEmojiChannelDefaultStatuses'}, sticker_id?: int, background_colors?: list<int>} $video_emoji_markup Animated sticker profile picture, must contain either a [videoSizeEmojiMarkup](https://docs.madelineproto.xyz/API_docs/constructors/videoSizeEmojiMarkup.html) or a [videoSizeStickerMarkup](https://docs.madelineproto.xyz/API_docs/constructors/videoSizeStickerMarkup.html) constructor. @see https://docs.madelineproto.xyz/API_docs/types/VideoSize.html
     * @param ?int $floodWaitLimit Can be used to specify a custom flood wait limit: if a FLOOD_WAIT_ rate limiting error is received with a waiting period bigger than this integer, an RPCErrorException will be thrown; otherwise, MadelineProto will simply wait for the specified amount of time. Defaults to the value specified in the settings: https://docs.madelineproto.xyz/PHP/danog/MadelineProto/Settings/RPC.html#setfloodtimeout-int-floodtimeout-self
     * @param ?string $queueId If specified, ensures strict server-side execution order of concurrent calls with the same queue ID.
     * @param ?\Amp\Cancellation $cancellation Cancellation
     * @return array{_: 'photos.photo', photo: array{_: 'photoEmpty', id: array}|array{_: 'photo', has_stickers: array, id: array, access_hash: array, file_reference: array, date: array, sizes: list<array>, video_sizes?: list<array>, dc_id: array}, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/photos.Photo.html
     */
    public function uploadContactProfilePhoto(bool|null $suggest = null, bool|null $save = null, array|int|string|null $user_id = null, mixed $file = null, mixed $video = null, float|null $video_start_ts = null, array|null $video_emoji_markup = null, ?int $floodWaitLimit = null, ?string $queueId = null, ?\Amp\Cancellation $cancellation = null): array;
}
