<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\SitesFilter;
use App\Http\Controllers\Controller;
use App\Models\Site;
use App\Http\Requests\V1\UpdateSiteRequest;
use App\Http\Requests\V1\StoreSiteRequest;
use App\Http\Resources\V1\SiteCollection;
use App\Http\Resources\V1\SiteResource;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new SitesFilter();
        $queryItems = $filter->transform($request);
        
        $sites = Site::where($queryItems)->paginate();
        return new SiteCollection($sites->appends($request->query()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiteRequest $request)
    {
        return new SiteResource(Site::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Site $site)
    {
        return new SiteResource($site);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiteRequest $request, Site $site){
        $site->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site)
    {
        //
    }
}
