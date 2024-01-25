<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Http\Models\{
    Pretext
};

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            $message = strtolower($message);
            
            if ($message == 'hi') {
                $this->askName($botman);
            }elseif ($message === 'hai') {
                $this->askName($botman);
            }elseif ($message === 'hai!') {
                $this->askName($botman);
            }elseif ($message === 'hai!') {
                $this->askName($botman);
            }elseif ($message === 'hallo') {
                $this->askName($botman);
            }elseif ($message === 'hello') {
                $this->askName($botman);
            }elseif ($message === 'hello!') {
                $this->askName($botman);
            }elseif ($message === 'menu') {
                $this->menuMakanan($botman);
            }

            // menu
            elseif ($message === 'pesan_1') {
                $this->pesanan_1($botman);
            }elseif ($message === 'pesan_2') {
                $this->pesanan_2($botman);
            }elseif ($message === 'pesan_3') {
                $this->pesanan_3($botman);
            }elseif ($message === 'pesan_4') {
                $this->pesanan_4($botman);
            }elseif ($message === 'pesan_5') {
                $this->pesanan_5($botman);
            }elseif ($message === 'pesan_6') {
                $this->pesanan_6($botman);
            }elseif ($message === 'pesan_7') {
                $this->pesanan_7($botman);
            }elseif ($message === 'pesan_8') {
                $this->pesanan_8($botman);
            }elseif ($message === 'pesan_9') {
                $this->pesanan_9($botman);
            }

            if($message === 'ya'){
                $this->confirmPesanan($botman);
            }

            
        });

        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! siapa nama kamu?', function (Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you ' . $name . ' ini adalah customer service restoran Sahrudin Mari Tuang. </ br></ br> </ br> </ br> Berikut bentuk pelayanan yang mungkin dapat membantu anda: </ br></ br></ br>
            Ada menu apa saja di resto ini? [<b>menu</b>] </ br></ br>
            Apakah ada website yang lengkap mengenai detail informasi resto? [<b>info</b>] </ br></ br>
            Buka dari jam berapa sampai jam berapa resto ini? [<b>jadwal</b>] </ br></ br>]');
        });
    }

    public function menuMakanan($botman)
    {
        $botman->ask("Tentu, berikut adalah menu yang tersedia pada Mari Tuang Resto: 
        <ul>
            <li>1. Steak</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;Harga: Rp. 50000 [<b>pesan_1</b>]</li>
            <li>2. Pasta</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;Harga: Rp. 30000 [<b>pesan_2</b>]</li>
            <li>3. Nasi Goreng</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;Harga: Rp. 20000 [<b>pesan_3</b>]</li>
            <li>4. Sushi</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;Harga: Rp. 30000 [<b>pesan_4</b>]</li>
            <li>5. Pizza</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;Harga: Rp. 50000 [<b>pesan_5</b>]</li>
            <li>6. Ayam Goreng</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;Harga: Rp. 15000 [<b>pesan_6</b>]</li>
            <li>7. Burger</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;Harga: Rp. 30000 [<b>pesan_7</b>]</li>
            <li>8. Salmon panggang</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;Harga: Rp. 50000 [<b>pesan_8</b>]</li>
            <li>9. Rendang</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;Harga: Rp. 30000 [<b>pesan_9</b>]</li>
        </ul>", 

        function (Answer $answer) {

            // $name = $answer->getText();

            $this->say('Terimakasih sudah memesan, anda yakin akan melanjutkan pesanan?[<b>Ya/Tidak</b>]');
        });
    }

    public function confirmPesanan($botman){
        $botman->ask("Ok terimakasih, harap tunggu pesanan sedang di proses..", function(Answer $answer){
            // $pesan = $answer->getText();

            // $this->say("" . $pesan . "");
        });
    }

    public function pesanan_1($botman){
        $botman->ask("", function(Answer $answer){
            $pesan = $answer->getText();

            $this->say("" . $pesan . "");
        });
    }
    public function pesanan_2($botman){
        $botman->ask("", function(Answer $answer){
            $pesan = $answer->getText();

            $this->say("" . $pesan . "");
        });
    }
    public function pesanan_3($botman){
        $botman->ask("", function(Answer $answer){
            $pesan = $answer->getText();

            $this->say("" . $pesan . "");
        });
    }
    public function pesanan_4($botman){
        $botman->ask("", function(Answer $answer){
            $pesan = $answer->getText();

            $this->say("" . $pesan . "");
        });
    }
    public function pesanan_5($botman){
        $botman->ask("", function(Answer $answer){
            $pesan = $answer->getText();

            $this->say("" . $pesan . "");
        });
    }
    public function pesanan_6($botman){
        $botman->ask("", function(Answer $answer){
            $pesan = $answer->getText();

            $this->say("" . $pesan . "");
        });
    }
    public function pesanan_7($botman){
        $botman->ask("", function(Answer $answer){
            $pesan = $answer->getText();

            $this->say("" . $pesan . "");
        });
    }
    public function pesanan_8($botman){
        $botman->ask("", function(Answer $answer){
            $pesan = $answer->getText();

            $this->say("" . $pesan . "");
        });
    }
    public function pesanan_9($botman){
        $botman->ask("", function(Answer $answer){
            $pesan = $answer->getText();

            $this->say("" . $pesan . "");
        });
    }
    
}


