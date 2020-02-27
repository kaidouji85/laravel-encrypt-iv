<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

/**
 * 暗号化 初期化ベクトル配置場所を勉強するためのコマンド
 */
class EncryptIV extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ecnrypt-iv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'study encrypt initial vector';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // 勉強用に暗号化前の情報をコンソール出力している
        // ただ、セキュリティ上の問題があるので、本番環境では絶対にこのようなコードを書いてはいけない

        $origin = "オリジナルメッセージ";
        $this->info("origin: {$origin}");
        
        $encrpted = encrypt($origin);
        $this->info("encrpted: {$encrpted}");
        
        $base64Decoded = base64_decode($encrpted);
        $this->info("base64Decoded: {$base64Decoded}");
    }
}
