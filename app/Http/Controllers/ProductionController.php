<?php

namespace App\Http\Controllers;

use App\Production;
use App\Transformers\ProductionTransformer;
use App\Transformers\EpisodeTransformer;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    /**
   * Eloquent model.
   *
   * @return \Illuminate\Database\Eloquent\Model
   */
  protected function model()
  {
      return new Production;
  }

  /**
   * Transformer for the current model.
   *
   * @return \League\Fractal\TransformerAbstract
   */
  protected function transformer()
  {
      return new ProductionTransformer;
  }

    public function getEpisodes($id)
    {
        return $this->response->paginator($this->find($id)->episodes()->paginate(25), new EpisodeTransformer);
    }
}
