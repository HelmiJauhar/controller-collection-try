<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class indexController extends Controller
{
    public function cobaMethodString()
    {
        $length = Str::length('Laravel');
        echo $length; echo "  || Fungsi dari str::length";
        echo "<br>";
        $random = Str::random(40);
        echo $random; echo "  || Fungsi dari str::random";
        echo "<br>";
        $converted = Str::substr('The Laravel Framework', 4, 7);
        echo $converted; echo "  || Fungsi dari str::substr";
        echo "<br>";
        $truncated = Str::limit('The quick brown fox jumps over the lazy dog', 20);
        echo $truncated; echo "  || Fungsi dari str::limit";
        echo "<br>";
        $string = Str::upper('laravel');
        echo $string; echo "  || Fungsi dari str::upper";
        echo "<br>";
        $lower = Str::lower('LARAVEL');
        echo $lower; echo "  || Fungsi dari str::lower";
        echo "<br>";
        $isAscii = Str::isAscii('Taylor');
        echo $isAscii; echo "  || Fungsi dari str::isAscii";
        echo "<br>";
        $replaced = Str::replaceFirst('the', 'a', 'the quick brown fox jumps over the lazy dog');
        echo $replaced; echo "  || Fungsi dari str::replaceFirst";
        echo "<br>";
        $title = Str::title('a nice title uses the correct case');
        echo $title; echo "  || Fungsi dari str::title";
        echo "<br>";
        $slice = Str::after('This is my name', 'This is');
        echo $slice; echo "  || Fungsi dari str::after";
    }
    public function cobaMethodCollection()
    {
        $anggota = collect([
            ['id' => 1, 'name' => 'Helmi', 'age' => 18, 'kids' => 3],
            ['id' => 2, 'name' => 'Atma', 'age' => 17, 'kids' => 4],
            ['id' => 3, 'name' => 'Gede', 'age' => 19, 'kids' => 2],
            ['id' => 4, 'name' => 'Udin', 'age' => 20, 'kids' => 5],
            ['id' => 5, 'name' => 'Dio', 'age' => 17, 'kids' => 1]
        ]);
        return $anggota->max('age');
        return $anggota->min('age');
        return $anggota->avg('age');
        return $anggota->median('id');
        return $anggota->sum('kids');
        return $anggota->sortBy('id');
        return $anggota->sortByDesc('id');
        return $anggota->nth(2);
        return $anggota->first();
        return $anggota->last();
        return $anggota->where('age','!=',17);
        return $anggota->firstWhere('id',3);
        return $anggota->whereBetween('age',[18,20]);
        return $anggota->whereNotBetween('age',[18,20]);
        return $anggota->whereIn('id',[1,2,3]);
        return $anggota->whereNotIn('id',[1,2,3]);
        return $anggota->pluck('age');
        return $anggota->skipUntil(fn ($item) => $item['name'] === 'Atma');
        return $anggota->skip(4);
        return $anggota->shift();
    }
    public function cobaCollectionObject()
    {
       $member01 = new \stdClass();
       $member01->nama = "Helmi";
       $member01->umur = 18;
       $member01->jurusan = "Teknik Informatika";
       $member01->asal = "Malang";
       $member02 = new \stdClass();
       $member02->nama = "Atma";
       $member02->umur = 17;
       $member02->jurusan = "DKV";
       $member02->asal = "Jember";
       $member03 = new \stdClass();
       $member03->nama = "Udin";
       $member03->umur = 19;
       $member03->jurusan = "Sistem Informasi";
       $member03->asal = "Kediri";
       $member04 = new \stdClass();
       $member04->nama = "Dio";
       $member04->umur = 20;
       $member04->jurusan = "Teknik Komputer Jaringan";
       $member04->asal = "Kediri";
       $members = collect([
           0 => $member01,
           1 => $member02,
           2 => $member03,
           3 => $member04,]); 
    /* dump($members);  */
    $members->sortBy('umur')->dump();
    /* $members->where('asal','Kediri')->dump();
    $members->whereBetween('umur',[18,20])->dump();
    $members->whereIn('asal',['Kediri','Jember'])->dump();
    $members->pluck('nama')->dump();
    $members->groupBy('asal')->dump(); */
    }
    
    public function memberView()
    {
        $member01 = new \stdClass();
       $member01->nama = "Helmi";
       $member01->umur = 18;
       $member01->jurusan = "Teknik Informatika";
       $member01->asal = "Malang";

       $member02 = new \stdClass();
       $member02->nama = "Atma";
       $member02->umur = 17;
       $member02->jurusan = "DKV";
       $member02->asal = "Jember";

       $member03 = new \stdClass();
       $member03->nama = "Udin";
       $member03->umur = 19;
       $member03->jurusan = "Sistem Informasi";
       $member03->asal = "Kediri";

       $member04 = new \stdClass();
       $member04->nama = "Dio";
       $member04->umur = 20;
       $member04->jurusan = "Teknik Komputer Jaringan";
       $member04->asal = "Kediri";
       $members = collect([
           0 => $member01,
           1 => $member02,
           2 => $member03,
           3 => $member04,
       ]);
       return view('member',compact('members'));
    }
}
