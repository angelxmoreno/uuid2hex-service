<?php
declare(strict_types=1);


namespace App\Utils;

use MatomoTracker;
use Psr\Http\Message\RequestInterface;

/**
 * Class Analytics
 * @package App\Utils
 */
class Analytics
{
    /**
     * @var MatomoTracker
     */
    protected $engine;

    /**
     * @var bool
     */
    protected $enabled = false;

    /**
     * Analytics constructor.
     * @param MatomoTracker $engine
     * @param bool $enabled
     */
    public function __construct(MatomoTracker $engine, bool $enabled = false)
    {
        $this->engine = $engine;
        $this->enabled = $enabled;
    }

    /**
     * @param RequestInterface $request
     */
    public function trackEventApiRequest(RequestInterface $request)
    {
        $this->trackEvent('api', 'request', $request->getUri()->getPath());
    }

    /**
     * @param $uuid
     */
    public function trackEventUUIDRequested($uuid)
    {
        $this->trackEvent('uuid', 'lookup', $uuid);
    }

    /**
     * @param $hex
     */
    public function trackEventHexCreated(string $hex)
    {
        $this->trackEvent('hex', 'created', $hex);
    }

    /**
     * @param $hex
     */
    public function trackEventHexRefreshed(string $hex)
    {
        $this->trackEvent('hex', 'refreshed', $hex);
    }

    /**
     * @param string $category
     * @param string $action
     * @param null $value
     */
    protected function trackEvent(string $category, string $action, $value = null)
    {
        if ($this->enabled) {
            $this->engine->doTrackEvent($category, $action, $value);
        }
    }

}