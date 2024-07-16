<?php

namespace App\Traits;

use Carbon\Carbon;

trait CrudResponse
{
    use HttpResponse;

    public function indexMethod($model, string ...$params)
    {
        $model->each(function ($model) use ($params) {
            foreach ($params as $param) {
                $model->$param;
            }

            $model->brlPrice = brlPrice($model->price);
            $model->brlSubTotal = brlPrice($model->subtotal_price);
            $model->brlTotal = brlPrice($model->total_price);

            $model->humansDate = humansDate($model->created_at);
        });

        return $this->trait("get", $model);
    }

    public function storeMethod($model, $data)
    {
        $data['created_at'] = Carbon::now();

        return $this->trait("store", $model->create($data));
    }

    public function showMethod($model, string ...$params)
    {
        if ($model === null) {
            return $this->trait("error");
        } else {
            foreach ($params as $param) {
                $model->$param;
            }

            return $this->trait("get", $model);
        }
    }

    public function updateMethod($model, $data)
    {
        $data['updated_at'] = Carbon::now();

        return $this->trait("update", $model->update($data));
    }

    public function destroyMethod($model, string ...$params)
    {
        if ($model === null) {
            return $this->trait("error");
        } else {
            foreach ($params as $param) {
                $model->$param->delete();
            }

            $model->delete();

            return $this->trait("delete", $model);
        }
    }
}
