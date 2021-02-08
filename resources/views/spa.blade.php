<x-guest-layout>
	<div x-data="app()" x-on:set-token.window="login($event)">
		<div class="w-full bg-gray-900">
			<div class="max-w-3xl min-h-screen bg-white mx-auto">
				<nav class="w-full bg-yellow-200 py-2 px-4 flex justify-between">
					App
					<template x-if="islogged">
						<div>
							<span x-text="user.name"/>
						</div>
					</template>
					<template x-if="!islogged">
						<div x-data="loginForm('{{action([\App\Http\Controllers\APIAuthController::class, 'login'])}}')">
							<form @submit.prevent="login()">
								<input 
									class="rounded-md py-1 shadow-md" 
									type="text" 
									name="email" 
									placeholder="email"
									x-model="email">
								<input 
									class="rounded-md py-1 shadow-md" 
									type="password" 
									name="password" 
									placeholder="password"
									x-model="pw">
								<input 
									class="rounded-md py-1 px-2 bg-gray-800 text-white shadow-md" 
									type="submit" 
									value="login">
							</form>
						</div>
					</template>
				</nav>
				<main>
					<template x-for="cardapio in cardapios" :key="cardapio">
						<div>
							Tipo: <span x-text="cardapio.tipo"></span><br> 
							Descrição: <span x-text="cardapio.descricao"></span><br> 
							Preço R$ <span x-text="cardapio.preco"></span>
						</div>
					</template>
				</main>
			</div>
		</div>
	</div>
</x-guest-layout>


