<?php
require_once "Avto.php";
Class Truck implements Car
{
	// установим, что скорость Грузовика = 100 км/ч
	public $speed = 100;

	// установим, что грузоподъемность Грузовика = 20 тонн
	public $liftingCapacity = 20;


	//Функция Кто быстрее принимает дистанцю и вес груза
	public function WhoIsFaster ($distance,$heft)
	{
		//Введем переменную $fight- рейс.Узнаем какое количество рейсов придется совершить авто, если груз превышает его грузоподъемность. Рассчеты производятся без учета обратной дороги до пункта загрузки.
		$fight = (ceil($heft / $this->liftingCapacity));

		//Узнаем, за какое время проезжает авто указанную дистанцию
		$time = $distance / $this->speed;

		//Если рейсов больше 1, то умнжим время на количество рейсов
		if($fight > 1){

			//выведем время
			echo $time * $fight;
		}

		//выведем время
		else echo $time;

	}
	//Функция узнать стоимость принимает дистанцию и стоимость
	public function TripPrice ($distance,$heft)
	{
		//Введем переменную $fight- рейс.Узнаем какое количество рейсов придется совершить авто, если груз превышает его грузоподъемность. Рассчеты производятся без учета обратной дороги до пункта загрузки.
		$fight = (ceil($heft / $this->liftingCapacity));

		//Введем переменную $price - цена. Цена за 1 км дороги с грузом составляет 50 рублей.
		//Узнаем сколько будет стоить проезд определенной дистанции для определенного груза на 1 машине с учетом количества рейсов
		$price = $distance * ($fight * 50);
		
		//выведем цену
		echo $price;
	}
}

