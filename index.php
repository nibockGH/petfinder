<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PetFinder</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
<div class="flex flex-col min-h-[100dvh]">
	<header class="px-4 lg:px-6 h-14 flex items-center">
	  <a class="flex items-center justify-center" href="../public/index.php">
		<svg
		  xmlns="http://www.w3.org/2000/svg"
		  width="24"
		  height="24"
		  viewBox="0 0 24 24"
		  fill="none"
		  stroke="currentColor"
		  stroke-width="2"
		  stroke-linecap="round"
		  stroke-linejoin="round"
		  class="h-6 w-6"
		>
		  <circle cx="11" cy="4" r="2"></circle>
		  <circle cx="18" cy="8" r="2"></circle>
		  <circle cx="20" cy="16" r="2"></circle>
		  <path d="M9 10a5 5 0 0 1 5 5v3.5a3.5 3.5 0 0 1-6.84 1.045Q6.52 17.48 4.46 16.84A3.5 3.5 0 0 1 5.5 10Z"></path>
		</svg>	
		<span class="sr-only">PetFinder</span>
	  </a>
	  <nav class="ml-auto flex gap-4 sm:gap-6">
		<a class="adoptar-link text-sm font-medium hover:underline underline-offset-4" href="#adoptar">
		  Adoptar
		</a>
		<a class="text-sm font-medium hover:underline underline-offset-4" href="src/components/Animaldata.astro">
		  Voluntariado
		</a>
		<a class="text-sm font-medium hover:underline underline-offset-4" href="#">
		  Donar
		</a>
		<a class="text-sm font-medium hover:underline underline-offset-4" href="#">
		  Nosotros
		</a>
	  </nav>
	</header>
	
	<main class="flex-1">
		<section class="w-full -mt-[200px] -md-40 lg:py-10 flex items-center">
            <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 md:px-6">
                <div class="flex flex-col space-y-4">
                    <img src="../public/images/logo.svg" alt="PetFinder Logo" class="h-48 w-auto mb-4">
                    <h1 class="text-3xl font-bold tracking-tighter sm:text-5xl xl:text-6xl/none">
                        Conectando vidas, creando hogares.
                    </h1>
                    <p class="max-w-[600px] text-gray-500 md:text-xl dark:text-gray-400">
                        PetFinder se dedica a rescatar y reubicar mascotas necesitadas.
                        Nuestra misión es brindar una segunda oportunidad de tener un hogar amoroso a cada animal que encontramos.
                    </p>
                    <a
                        href="../public/ayuda.php"
                        class="bg-red-400 inline-flex h-10 items-center justify-center rounded-md px-8 text-sm font-medium text-gray-200 shadow transition-colors 
						hover:bg-red-300 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-[#ff6b6b] 
						disabled:pointer-events-none disabled:opacity-50"
                    >
                        Ayudar
                    </a>
                </div>
                <div class="flex justify-center lg:justify-end mt-6 lg:mt-0 lg:ml-6">
					<img
					src="../public/images/perrosr.jpeg"
					alt="Rescued Pets"
					width="550"
					height="550"
					class="mx-auto aspect-video overflow-hidden rounded-xl object-cover sm:w-full lg:order-last lg:aspect-square"
				  />
                </div>
            </div>
        </section>
		<section class="w-full  py-12 md:py-24 lg:py-32 bg-gray-800 dark:bg-gray-800">
			<div class="container ml-40 px-4  md:px-6">
				<div class="grid gap-6 lg:grid-cols-2 lg:gap-12">
					<div class="flex flex-col gap-4">
						<div class=" flex flex-col gap-2 min-[400px]:flex-row lg:justify-end">
							<img src="../public/images/perro1.jpg" 
							class="mx-auto aspect-video overflow-hidden rounded-xl object-cover sm:w-full lg:order-last lg:aspect-square" alt="">
						   </div>
						<div class="space-y-2">
							<br>	
							<h3 class="text-xl text-white font-bold">Pancho</h3>
							<p class="text-gray-500 dark:text-gray-400">
								Pancho es un perro cachorro que ama jugar a la pelota y dar largos paseos. Se lleva muy bien con chicos y otras mascotas.
							</p>
							<a
								href="#"
								class="inline-flex h-9 items-center justify-center rounded-md bg-red-400 px-4 py-2 text-sm font-medium text-gray-50 
									   shadow transition-colors hover:bg-red-300 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-red-400
									   disabled:pointer-events-none disabled:opacity-50"
							>
								Adoptar a Pancho
							</a>
						</div>
					</div>
					<div class="flex flex-col gap-4">
						<div class="flex flex-col gap-2 min-[400px]:flex-row lg:justify-end">
							<img src="../public/images/gato2.jpg" 
							width="550"
							height="310"
							 class="mx-auto aspect-video overflow-hidden rounded-xl object-cover 
							sm:w-full lg:order-last lg:aspect-square" 
							alt="">
						   </div>
						<div class="space-y-2">
							<h3 class="text-xl text-white font-bold">Michi</h3>
							<p class="text-gray-500 dark:text-gray-400">
								Michi es una gata de pelo corto doméstico de 6 meses que ama acurrucarse y jugar con juguetes. Se lleva muy bien con otros gatos y con chicos.
							</p>
							<a
								href="#"
								class="inline-flex h-9 items-center justify-center rounded-md bg-red-400 px-4 py-2 text-sm font-medium text-gray-50 
									   shadow transition-colors hover:bg-red-300 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-[#ff6b6b]
									   disabled:pointer-events-none disabled:opacity-50"
							>
								Adoptar a Michi
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="adoptar" class="w-full py-12 md:py-24 lg:py-32 dark:bg-gray-900">
			<div class="container mx-auto px-4 md:px-6">
			  <div class="grid gap-6 lg:grid-cols-2 lg:gap-10">
				<div class="space-y-8">
				  <h2 class="text-4xl font-bold tracking-tighter md:text-5xl/tight text-gray-800 dark:text-white">El proceso de adopción</h2>
				  <p class="max-w-[600px] text-lg text-gray-600 md:text-xl lg:text-lg xl:text-xl dark:text-gray-400">
					Adoptar una mascota de PetFinder es fácil y sencillo. Nuestro equipo te guiará a lo largo del proceso y se asegurará de que encuentres el amigo peludo perfecto para tu familia.
				  </p>
				  <div class="flex flex-col gap-8">
					<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
					  <h3 class="text-2xl font-bold text-gray-800 dark:text-white">Paso 1: Buscar una mascota</h3>
					  <p class="text-gray-600 dark:text-gray-400">
						Explora nuestras mascotas disponibles y encuentra la que mejor se adapte a tu estilo de vida y hogar.
					  </p>
					</div>
					<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
					  <h3 class="text-2xl font-bold text-gray-800 dark:text-white">Paso 2: Aplicar a la adopción</h3>
					  <p class="text-gray-600 dark:text-gray-400">
						Completa nuestra sencilla solicitud de adopción y nuestro equipo la revisará para asegurar que la mascota sea una buena coincidencia.
					  </p>
					</div>
					<div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
					  <h3 class="text-2xl font-bold text-gray-800 dark:text-white">Paso 3: Conocer y Adoptar</h3>
					  <p class="text-gray-600 dark:text-gray-400">
						Una vez aprobado, podrás conocer a la mascota y completar el proceso de adopción. Estaremos allí para apoyarte en cada paso del camino.
					  </p>
					</div>
				  </div>
				</div>
				<div class="flex justify-center lg:justify-end">
				  <img src="../public/images/perro2.jpg" class="mx-auto w-full max-w-sm rounded-xl shadow-lg 
				  transition-transform transform hover:scale-105 duration-300" alt="Cachorro">
				</div>
			  </div>
			</div>
		  </section>
		  
	  <section class="w-full py-12 md:py-24 lg:py-32 bg-gray-800 dark:bg-gray-800">
		<div class="container px-4 md:px-6">
		  <div class="grid gap-6 lg:grid-cols-2 lg:gap-10">
			  <div class="space-y-2">
			  <h2 class="text-3xl font-bold text-white tracking-tighter md:text-4xl/tight">Participa</h2>
			  <p class="max-w-[600px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400">
				Hay muchas formas en las que puedes apoyar a PetFinder y 
				ayudarnos a continuar nuestra mision de rescatar y encontrar hogares para mascotas necesitadas
			  </p>
			  <div class="flex flex-col gap-4">
				<div class="grid gap-1">
					<h3 class="text-xl font-bold text-white">Voluntario</h3>
					<p class="text-gray-500 dark:text-gray-400">
					Unete a nuestro equipo de voluntarios dedicados y ayudanos a cuidar a los animales, asistir en eventos, y mas.
				  </p>
				  <a
					href="https://api.whatsapp.com/send?phone=543424232775&text=Hola%20buenas%20estoy%20interesado%20en%20ser%20voluntario%20para%20PetFinder!" target="_blank"
					class="inline-flex h-9 items-center justify-center rounded-md bg-red-400 px-4 py-2 text-sm font-medium text-gray-50 
									   shadow transition-colors hover:bg-red-300 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-[#ff6b6b]
									   disabled:pointer-events-none disabled:opacity-50"
				  >
					Saber mas
				  </a>
				</div>
				<div class="grid gap-1">
				  <h3 class="text-xl text-white font-bold">Dona</h3>
				  <p class="text-gray-500 dark:text-gray-400">
					Tu apoyo financiero nos ayuda a proporcionar comida, refugio y cuidado medico para los animales bajo nuestro cuidado.
				  </p>
				  <a
					href="#"
					class="inline-flex h-9 items-center justify-center rounded-md bg-red-400 px-4 py-2 text-sm font-medium text-gray-50 
									   shadow transition-colors hover:bg-red-300 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-[#ff6b6b]
									   disabled:pointer-events-none disabled:opacity-50"
				  >
					Dona ahora
				  </a>
				</div>
			  </div>
			</div>
			<div class="flex flex-col items-start space-y-4">
				<div class="grid gap-1">
					<h3 class="text-xl text-white font-bold">Llamanos</h3>
					<p class="text-gray-500 dark:text-gray-400">
					  Tu apoyo financiero nos ayuda a proporcionar comida, refugio y cuidado medico para los animales bajo nuestro cuidado.
					</p>
					<a
					  href="#"
					  class="inline-flex h-9 items-center justify-center rounded-md bg-red-400 px-4 py-2 text-sm font-medium text-gray-50 
										 shadow transition-colors hover:bg-red-300 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-[#ff6b6b]
										 disabled:pointer-events-none disabled:opacity-50"
					>
					 Contactarse
					</a>
			</div>
		  </div>
		</div>
	  </section>
	</main>
	<footer class="flex flex-col gap-2 sm:flex-row py-6 w-full shrink-0 text-center justify-center items-center px-4 md:px-6 border-t">
		© 2024 PetFinder. All rights reserved.
	</footer>
  </div>
</body>
</html>
