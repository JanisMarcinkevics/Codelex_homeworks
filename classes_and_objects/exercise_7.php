<?php declare(strict_types=1);

class Dog {
    private string $name;
    private string $sex;
    private ?Dog $mother;
    private ?Dog $father;

    public function __construct(string $name, string $sex) {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = null;
        $this->father = null;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSex(): string {
        return $this->sex;
    }

    public function setMother(Dog $mother): void {
        $this->mother = $mother;
    }

    public function setFather(Dog $father): void {
        $this->father = $father;
    }

    public function fathersName(): string {
        if ($this->father === null) {
            return "Unknown";
        }
        return $this->father->getName();
    }

    public function hasSameMotherAs(Dog $otherDog): bool {
        if ($this->mother === null || $otherDog->mother === null) {
            return false;
        }
        return $this->mother === $otherDog->mother;
    }
}

class DogTest {
    public function main(): void {
        $max = new Dog("Max", "male");
        $rocky = new Dog("Rocky", "male");
        $sparky = new Dog("Sparky", "male");
        $buster = new Dog("Buster", "male");
        $sam = new Dog("Sam", "male");
        $lady = new Dog("Lady", "female");
        $molly = new Dog("Molly", "female");
        $coco = new Dog("Coco", "female");

        $max->setMother($lady);
        $max->setFather($rocky);
        $coco->setMother($molly);
        $coco->setFather($buster);
        $rocky->setMother($molly);
        $rocky->setFather($sam);
        $buster->setMother($lady);
        $buster->setFather($sparky);


        echo $coco->fathersName() . "\n"; // "Buster"
        echo $sparky->fathersName() . "\n"; // "Unknown"

        $sameMother = $coco->hasSameMotherAs($rocky);
        echo $sameMother ? "True\n" : "False\n";// "True"

        $sameMother = $max->hasSameMotherAs($rocky);
        echo $sameMother ? "True\n" : "False\n"; // "False"
    }
}

$test = new DogTest();
$test->main();

