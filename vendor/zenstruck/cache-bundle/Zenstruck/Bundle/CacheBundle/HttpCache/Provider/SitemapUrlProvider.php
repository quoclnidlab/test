<?php

namespace Zenstruck\Bundle\CacheBundle\HttpCache\Provider;

use Buzz\Browser;
use Symfony\Component\DomCrawler\Crawler;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class SitemapUrlProvider extends AbstractUrlProvider
{
    protected $buzz;

    public function __construct(Browser $buzz)
    {
        $this->buzz = $buzz;
    }

    public function getUrls($host = null)
    {
        if (!$host) {
            throw new \InvalidArgumentException('A host must be set.');
        }

        $urls = array();

        // check for sitemap index
        $sitemaps = $this->getSitemapEntries($this->addPathToHost('sitemap_index.xml', $host));

        if (count($sitemaps)) {
            // index found, loop through sitemaps
            foreach ($sitemaps as $sitemap) {
                $urls = array_merge($urls, $this->getSitemapEntries($sitemap));
            }
        } else {
            // no index, try sitemap.xml
            $urls = $this->getSitemapEntries($this->addPathToHost('sitemap.xml', $host));
        }

        return $urls;
    }

    /**
     * @param $url
     *
     * @return array
     */
    protected function getSitemapEntries($url)
    {
        $response = $this->buzz->get($url);

        if ($response->isSuccessful()) {
            $crawler = new Crawler($response->getContent());
            $ret = array();

            foreach ($crawler->filter('loc') as $node) {
                $ret[] = $node->nodeValue;
            }

            return $ret;
        }

        return array();
    }
}