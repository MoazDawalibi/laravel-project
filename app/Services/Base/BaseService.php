<?php

namespace App\Services\Base ;

class BaseService {

    public function __construct(protected  $class){

    }

    public function getAll()
    {
        $BaseData = $this->class::get();
        return $BaseData;
    }
    public function getOne($id)
    {
        $BaseData = $this->class::findOrFail($id);
        return $BaseData;
    }
    
    public function create( $data )
    {
        $BaseData = $this->class::create($data);
        return $BaseData;
    }
    public function update( $id, $data )
    {
        $BaseData = $this->class::findOrFail($id);
        $BaseData->update($data);
        return $BaseData;
    }
    public function destroy($id)
    {
        $BaseData = $this->class::findOrFail($id);
        $BaseData->delete();
        return $BaseData;
    }
    public function getAllWith(string $withFuntionName)
    {
        return $this->class::with($withFuntionName)->get();
    }
    // public function getAllWithCount($count)
    // {
    //     $count_data = $this->class::take($count)->get();
    //     return $count_data;
    // }
}

