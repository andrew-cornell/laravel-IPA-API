<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;


class BeerController extends Controller
{
    /**
     * @string array
     */
    private $BeerData = array();

    public function __construct()
    {
        //data
        //ipa beers
        $this->BeerData["ipa"] = array();
        $this->BeerData["ipa"]["description"] = "IPA beer style is all about hop flavor, aroma and bitterness";
        $this->BeerData["ipa"]["types"] = array();
        $this->BeerData["ipa"]["types"]["voodoo_ranger"] = array();
        $this->BeerData["ipa"]["types"]["voodoo_ranger"]["name"] = "Voodoo Ranger";
        $this->BeerData["ipa"]["types"]["voodoo_ranger"]["description"] = "super good";
        $this->BeerData["ipa"]["types"]["120_min_ipa"]["name"] = "120 Minute IPA";
        $this->BeerData["ipa"]["types"]["120_min_ipa"]["description"] = "sorta good";
        $this->BeerData["ipa"]["types"]["two_hearted_ale"]["name"] = "Two Hearted Ale";
        $this->BeerData["ipa"]["types"]["two_hearted_ale"]["description"] = "not good";

        //stout beers
        $this->BeerData["stout"] = array();
        $this->BeerData["stout"]["description"] = "Stout is a dark, top-fermented beer with a number of variations";
        $this->BeerData["stout"]["types"] = array();
        $this->BeerData["stout"]["types"]["guinness"] = array();
        $this->BeerData["stout"]["types"]["guinness"]["name"] = "Guinness";
        $this->BeerData["stout"]["types"]["guinness"]["description"] = "super good";
        $this->BeerData["stout"]["types"]["flying_dog"]["name"] = "Flying Dog";
        $this->BeerData["stout"]["types"]["flying_dog"]["description"] = "sorta good";
        $this->BeerData["stout"]["types"]["obsidian"]["name"] = "Obsidian";
        $this->BeerData["stout"]["types"]["obsidian"]["description"] = "not good";

        //porter beers
        $this->BeerData["porter"] = array();
        $this->BeerData["porter"]["description"] = "Dark medium-bodied beer with a nice balance of malty sweetness and bitter hoppiness";
        $this->BeerData["porter"]["types"] = array();
        $this->BeerData["porter"]["types"]["founders_porter"] = array();
        $this->BeerData["porter"]["types"]["founders_porter"]["name"] = "Founders Porter";
        $this->BeerData["porter"]["types"]["founders_porter"]["description"] = "super good";
        $this->BeerData["porter"]["types"]["kernel_india_double_porter"]["name"] = "Kernel India Double Porter";
        $this->BeerData["porter"]["types"]["kernel_india_double_porter"]["description"] = "sorta good";
        $this->BeerData["porter"]["types"]["yuengling_hershey"]["name"] = "Yuengling Hershey";
        $this->BeerData["porter"]["types"]["yuengling_hershey"]["description"] = "not good";

        //sour beers
        $this->BeerData["sour"] = array();
        $this->BeerData["sour"]["description"] = "Sour beers can create the perfect balance of sweet and sour flavors";
        $this->BeerData["sour"]["types"] = array();
        $this->BeerData["sour"]["types"]["wild_little_thing"] = array();
        $this->BeerData["sour"]["types"]["wild_little_thing"]["name"] = "Wild Little Thing";
        $this->BeerData["sour"]["types"]["wild_little_thing"]["description"] = "super good";
        $this->BeerData["sour"]["types"]["sour_monkey"]["name"] = "Sour Monkey";
        $this->BeerData["sour"]["types"]["sour_monkey"]["description"] = "sorta good";
        $this->BeerData["sour"]["types"]["dominga_mimosa_sour"]["name"] = "Dominga Mimosa Sour";
        $this->BeerData["sour"]["types"]["dominga_mimosa_sour"]["description"] = "not good";
    }


    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     //* @return \Illuminate\View\View
     */



    public function index()
    {
        return $this->BeerData;
    }
    public function type($type)
    {
        return $this->BeerData[$type];
    }
    public function beer($type, $id){
        return $this->BeerData[$type]["types"][$id];
    }

}
