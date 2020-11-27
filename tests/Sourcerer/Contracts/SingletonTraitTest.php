<?php

    use PHPUnit\Framework\TestCase;
    use Sourcerer\Contracts\SingletonTrait;


    final class GuineaPig {
        use SingletonTrait;
    }

    final class SingletonTraitTest extends TestCase
    {
        public $guineapig;
        public $bait;

        public function setUp()
        {
            $this->guineapig = GuineaPig::getInstance();
            $this->bait = GuineaPig::getInstance();
        }

        public function testIsInstanceOf(): void
        {
            $this->assertInstanceOf(
                GuineaPig::class,
                GuineaPig::getInstance()
            );

            $this->assertInstanceOf(
                GuineaPig::class,
                $this->guineapig
            );

            $this->assertInstanceOf(
                GuineaPig::class,
                $this->bait
            );
        }

        public function testIsObject(): void
        {
            $this->assertIsObject($this->guineapig);
            $this->assertIsObject($this->bait);
        }

        public function testSame(): void
        {
            $this->assertSame(
                GuineaPig::getInstance(),
                $this->guineapig
            );

            $this->assertSame(
                GuineaPig::getInstance(),
                $this->bait
            );
        }

        public function testEquals(): void
        {
            $this->assertEquals(
                GuineaPig::getInstance(),
                $this->guineapig
            );

            $this->assertEquals(
                GuineaPig::getInstance(),
                $this->bait
            );

            $this->assertEquals(
                $this->guineapig,
                $this->bait
            );
        }

        public function testContainsOnlyInstancesOf(): void
        {
            $this->assertContainsOnlyInstancesOf(
                GuineaPig::class,
                [GuineaPig::getInstance(), $this->guineapig, $this->bait]
            );
        }
    }