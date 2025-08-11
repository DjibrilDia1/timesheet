<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <!-- Titre à gauche -->
            <h2 class="font-semibold text-base text-gray-800 font-light">
                {{ __('Mytimesheet') }}
            </h2>
            
            <!-- Barre de recherche et filtre au centre -->
            <div class="flex items-center space-x-3">
                <!-- Barre de recherche -->
                <div class="relative">
                    <input 
                        type="text" 
                        placeholder="Recherche...." 
                        class="w-48 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent placeholder-gray-400 bg-white"
                    >
                </div>
                
                <!-- Bouton dropdown -->
                <button class="px-3 py-2 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:ring-2 focus:ring-primary focus:border-transparent">
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Bouton d'ajout à droite -->
            <button class="w-10 h-10 bg-secondary text-primary rounded-full flex items-center justify-center hover:bg-primary/90 hover:text-white transition-colors duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
            </button>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Bouton Commencer centré -->
            <div class="flex justify-center mb-6 ">
                <button class="bg-primary text-white px-3 py-1 rounded-lg hover:bg-primary/90 transition-colors duration-200 flex items-center space-x-2">
                    <svg class="w-5 h-5 font-bold" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                </button>
            </div>

            <!-- Blocs d'information -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Bloc Responsable -->
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                    <h3 class="font-bold text-lg text-gray-800 mb-4 underline">Responsable</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><span class="font-medium font-courier-new">Nom Prénom:</span></p>
                        <p><span class="font-medium font-courier-new">Email:</span></p>
                        <p><span class="font-medium font-courier-new">Téléphone:</span></p>
                    </div>
                </div>

                <!-- Bloc Détails de l'employé -->
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                    <h3 class="font-bold text-lg text-gray-800 mb-4 underline">Détails de l'employé</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><span class="font-medium font-courier-new">Nom Prénom:</span> </p>
                        <p><span class="font-medium font-courier-new">Email:</span> </p>
                        <p><span class="font-medium font-courier-new">Téléphone:</span></p>
                    </div>
                </div>

                <!-- Bloc Période -->
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                    <h3 class="font-bold text-lg text-gray-800 mb-4 underline">Période</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><span class="font-medium font-courier-new">Début:</span></p>
                        <p><span class="font-medium font-courier-new">Fin:</span></p>
                    </div>
                </div>
            </div>

            <!-- Tableau de saisie des tâches -->
            <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-secondary">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date(s)</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Heure d'arrivée</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Heure de depart</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Temps de tache</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Projet</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tache</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description tache</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Ligne vide pour la saisie -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="date" class="border border-gray-300 rounded px-2 py-1 text-sm w-32 focus:ring-2 focus:ring-primary focus:border-transparent">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="time" class="border border-gray-300 rounded px-2 py-1 text-sm w-24 focus:ring-2 focus:ring-primary focus:border-transparent">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="time" class="border border-gray-300 rounded px-2 py-1 text-sm w-24 focus:ring-2 focus:ring-primary focus:border-transparent">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="text" class="border border-gray-300 rounded px-2 py-1 text-sm w-20 focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="0h">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="text" class="border border-gray-300 rounded px-2 py-1 text-sm w-32 focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Nom du projet">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="text" class="border border-gray-300 rounded px-2 py-1 text-sm w-32 focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Nom de la tâche">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="text" class="border border-gray-300 rounded px-2 py-1 text-sm w-40 focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Description">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Bouton Ajouter ligne -->
            <div class="mt-6">
                <button class="bg-secondary text-primary font-bold px-4 py-2 rounded-lg hover:bg-primary/90 hover:text-white transition-colors duration-200 flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span>Ajouter ligne</span>
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
