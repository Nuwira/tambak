<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface BasicCrud
{
    public function lists(Request $request);

    public function paginate(Request $request, $number = 15);

    public function create($data = []);

    public function view($id);

    public function update($id, $data = []);

    public function delete($id);
}
