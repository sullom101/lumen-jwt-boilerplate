<?php
/**
 * @package     Product
 * @author      suleiman mayow <mayow.sullom@gmail.com>
 */
namespace App\Console\Commands;
use Illuminate\Console\Command;
/**
 * Class ServeCommand
 * @package App\Console\Commands
 */
class ServeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'serve {port?}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'serve lumen application.';
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if( $port = $this->argument('port') ){
            $this->info("Lumen development server started on your specified port http://localhost:{$port}/");
            passthru('"'.PHP_BINARY.'"'." -S localhost:{$port} -t public");
        }
        $this->info("Lumen development server started on http://localhost:8800/");
        passthru('"'.PHP_BINARY.'"'." -S localhost:8800 -t public");
    }
    
}