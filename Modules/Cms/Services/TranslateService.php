<?php


namespace Modules\Cms\Services;

use Modules\Cms\Repositories\TranslateRepository;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateService
{
    private $translateRepository;

    public function __construct(TranslateRepository $translateRepository)
    {
        $this->translateRepository = $translateRepository;
    }

    public function translateData($slug)
    {
        return $this->translateRepository->findBy('slug', $slug);
    }

    public function translateList($slug)
    {
        $object = $this->translateRepository->findBy('slug', $slug);

        if ($object) {
            $low = $object->id;
            if ($low>1) {
                $low = $object->id - 1;
            }
            $high = $low + 2;

            $data = $this->translateRepository->all()->whereBetween('id', [$low, $high]);
            foreach ($data as $datum) {
                if ($datum->slug == $slug) {
                    $datum['active'] = 'active';
                }
            }
            return $data;
        }
        return $this->translateRepository->all()->whereBetween('id', [1, 3]);
    }

    public function translateMoreList($limit = 0)
    {
        return $this->translateRepository->paginate($limit);
    }

    public function Translate($from, $to, $text)
    {
        $tr = new GoogleTranslate();
        $tr->setSource($from);
        $tr->setTarget($to);
        $result = $tr->translate($text);

        $lang_detect = null;
        if ($from == "auto") {
            $lang_detect = $tr->getLastDetectedSource();
        }

        return response()->json(['result' => $result, 'lang_detect' => $lang_detect]);
    }
}