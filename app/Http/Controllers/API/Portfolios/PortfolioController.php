<?php

namespace App\Http\Controllers\API\Portfolios;

use App\Http\Controllers\Controller;

use App\Http\Requests\Portfolios\StorePortfolioRequest;
use App\Http\Requests\Portfolios\UpdatePortfolioRequest;
use App\Models\Portfolios\Portfolio;
use App\Traits\CrudResponse;
use Illuminate\Http\File;

class PortfolioController extends Controller
{
    use CrudResponse;

    public function __construct(Portfolio $portfolio)
    {
        $this->portfolio = $portfolio;
    }

    public function index()
    {
        return $this->indexMethod($this->portfolio->get(), 'user');
    }

    public function store(StorePortfolioRequest $request)
    {
        $request->validated();

        if ($request->image) {
            $imagemPortfolio = $request->file('image');
            $caminhoImagem = $imagemPortfolio->store('assets/img/portfolio', 'public');

            $w = 1280;
            $h = 720;

            $imageData = file_get_contents(public_path('storage/' . $caminhoImagem));

            $image = imagecreatefromstring($imageData);

            $resizedImage = imagescale($image, $w, $h);

            ob_start();
            imagejpeg($resizedImage);
            $imagemBase64 = base64_encode(ob_get_clean());
        } else {
            $imagemBase64 = null;
        }


        $data = [
            'title' => $request->title,
            'name' => $request->name,
            'image' => $imagemBase64,
            'customer' => $request->customer,
            'duration' => $request->duration,
            'framework' => $request->framework,
            'access_link' => $request->access_link,
        ];

        return $this->storeMethod($this->portfolio, $data);
    }

    public function show($id)
    {
        return $this->showMethod($this->portfolio->find($id), 'user');
    }

    public function update(UpdatePortfolioRequest $request, $id)
    {
        $request->validated();

        $data = [
            'title' => $request->title,
            'name' => $request->name,
            'image' => $request->image,
            'customer' => $request->customer,
            'duration' => $request->duration,
            'framework' => $request->framework,
            'access_link' => $request->access_link,
        ];

        return $this->updateMethod($this->portfolio->find($id), $data);
    }

    public function destroy($id)
    {
        return $this->destroyMethod($this->portfolio->find($id));
    }
}
