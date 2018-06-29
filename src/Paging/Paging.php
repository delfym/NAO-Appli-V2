<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 19/06/2018
 * Time: 07:27
 */

namespace App\Paging;


class Paging
{
    private $nbPages;

    public function paging($numPage=null){
        $currentPage = $numPage;
        $perPage = 2;
        $start = (($currentPage-1) * $perPage);

        $nbChapters = $this->getDoctrine()
            ->getRepository(Observation::class)->getObs(1);
    //    $nbChapters = $this->chapter->countChapters();

        $this->nbPages = ceil($nbChapters/$perPage);
        if (empty($numPage)){
            return $chapters = $this->chapter->getChapters(0,4);
        } else {
            if(($start <= $nbChapters)
                && ($perPage <= $this->chapter->countChapters())){
                return $chapters = $this->chapter->getChapters($start, $perPage);
            }
        }
    }
}