<?php

    use PHPUnit\Framework\TestCase;
    use Sourcerer\Contracts\SingletonTrait;


    final class GuineaPig {
        use SingletonTrait;
    }

    $guineapig = GuineaPig::getInstance();
    $bait = GuineaPig::getInstance();


    final class SingletonTraitTest extends TestCase
    {
        public function testIsInstanceOf(): void {
            global
                $guineapig,
                $bait;

            $this->assertInstanceOf(
                GuineaPig::class,
                GuineaPig::getInstance()
            );

            $this->assertInstanceOf(
                GuineaPig::class,
                $guineapig
            );

            $this->assertInstanceOf(
                GuineaPig::class,
                $bait
            );
        }

        public function testIsObject(): void {
            global
                $guineapig,
                $bait;

            $this->assertIsObject($guineapig);
            $this->assertIsObject($bait);
        }

        public function testSame(): void {
            global
                $guineapig,
                $bait;

            $this->assertSame(
                GuineaPig::getInstance(),
                $guineapig
            );

            $this->assertSame(
                GuineaPig::getInstance(),
                $bait
            );
        }

        public function testEquals(): void {
            global
                $guineapig,
                $bait;

            $this->assertEquals(
                GuineaPig::getInstance(),
                $guineapig
            );

            $this->assertEquals(
                GuineaPig::getInstance(),
                $bait
            );

            $this->assertEquals(
                $guineapig,
                $bait
            );
        }

        public function testContainsOnlyInstancesOf(): void {
            global
                $guineapig,
                $bait;

            $this->assertContainsOnlyInstancesOf(
                GuineaPig::class,
                [GuineaPig::getInstance(), $guineapig, $bait]
            );
        }
    }