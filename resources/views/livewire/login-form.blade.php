<div>
    <form class="space-y-4 md:space-y-6" wire:submit="submit">
        <x-text-input name="email" type="email" id="email" label="Adresse mail" placeholder="adesse@email.com"
            wire:model="email" />
        <x-text-input name="password" type="password" id="password" label="Mot de passe" placeholder="******"
            wire:model="password" />

        <div class="flex items-center justify-between">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember" aria-describedby="remember" type="checkbox" wire:model="remember"
                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-purple-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-purple-600 dark:ring-offset-gray-800"
                        >
                </div>
                <div class="ml-3 text-sm">
                    <label for="remember" class="text-gray-500 dark:text-gray-300">Se souvenir de moi</label>
                </div>
            </div>
            <a href="#" class="text-sm font-medium text-purple-600 hover:underline dark:text-purple-500">Mot de
                passe oublié ?</a>
        </div>
        <button type="submit"
            class="w-full text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Se
            connecter</button>
    </form>
</div>
