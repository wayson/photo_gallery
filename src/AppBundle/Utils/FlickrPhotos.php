<?php
namespace AppBundle\Utils;

use Doctrine\ORM\EntityManager;

class FlickrPhotos
{
    private $key = '5b7cadb12393703bc7a3438f000e933f';
    private $secret = 'fbccdffdd0397113';

    private $url;

    public function __construct()
    {
        $this->url = 'https://api.flickr.com/services/rest?method=flickr.photos.search&api_key=' . $this->key;
    }

    public function searchPhotos($searchString)
    {
        $xml = simplexml_load_file($this->url . '&text=' . $searchString);

        $result = [];

        foreach($xml->photos->photo as $photo)
        {
            $imageUrl = sprintf('https://farm%s.staticflickr.com/%s/%s_%s',
                $photo['farm'],
                $photo['server'],
                $photo['id'],
                $photo['secret']
            );

            $result[] = [
                'flickrUrlSmall' => $imageUrl . '_q.jpg',
                'flickerUrlLarge' => $imageUrl . '_m.jpg',
                'title' => $photo['title'],
                'id' => $photo['id']
            ];
        }

        return $result;
    }
}