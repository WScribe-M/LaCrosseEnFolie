<?php 
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;

final class CrawlerTest extends TestCase
{
    public function test01(){
        $html = file_get_contents('http://195.154.118.169/mathea/hockey/cli-config.php?c=equipe&t=list');
        $crawler = new Crawler($html);

        $crawler ->filter('body'>'a')->first();
        $href = $crawler->filterXPath('//body/a')->attr('href');

        var_dump($href);
        $this->assertTrue(true);
    }
   
}