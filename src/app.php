<?php
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing;

	/*
	class LeapYearController
	{
	    public function index($year)
	    {
	        if ($this->is_leap_year($year)) {
	            return new Response('Yep, this is a leap year!');
	        }

	        return new Response('Nope, this is not a leap year.');
	    }

	    public function is_leap_year($year = null) {
		    if (null === $year) {
		        $year = date('Y');
		    }

		    return 0 === $year % 400 || (0 === $year % 4 && 0 !== $year % 100);
		}
	}
	*/

	$routes = new Routing\RouteCollection();
	$routes->add('hello', new Routing\Route('/hello/{name}', ['name' => 'World']));
	$routes->add('bye', new Routing\Route('/bye'));
	$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', [
	    'year' => null,
	    '_controller' => 'Calendar\Controller\LeapYearController::index',
	]));

	return $routes;
?>