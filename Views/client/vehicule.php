<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue - MaBagnole</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Poppins', sans-serif; }
        .glass { background: rgba(31, 41, 55, 0.7); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); }
    </style>
</head>
<body class="bg-gray-950 text-white min-h-screen">

    <nav class="fixed w-full top-0 z-50 transition-all duration-300 bg-gray-900/90 backdrop-blur-md border-b border-gray-800">
    <div class="container mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
             <a href="home.php">
                <div class="flex items-center gap-3 cursor-pointer">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center text-white shadow-lg shadow-blue-500/30">
                    <i class="fa-solid fa-car-side"></i>
                </div>
                <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                    MaBagnole
                </span>
            </div>
            </a>

            <div class="hidden md:flex space-x-8 items-center text-sm font-medium text-gray-300">
                <a href="home.php" class="hover:text-blue-400 transition">Accueil</a>
                <a href="vehicule.php" class="hover:text-blue-400 transition text-blue-400">Véhicules</a>
                
            </div>

            <div class="relative flex items-center">
                <button id="profileDropdownBtn" class="flex items-center gap-3 focus:outline-none group">
                    <div class="text-right hidden md:block">
                        <p class="text-sm font-medium text-white">Jean Dupont</p>
                        
                    </div>
                    
                    <i class="fa-solid fa-chevron-down text-xs text-gray-500 group-hover:text-white transition"></i>
                </button>

                <div id="profileDropdownMenu" class="hidden absolute right-0 top-full mt-3 w-48 bg-gray-800 border border-gray-700 rounded-xl shadow-2xl py-2 z-50">
                    
                    <a href="reservation.php" class="flex items-center gap-3 px-4 py-3 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition">
                        <i class="fa-solid fa-calendar-check text-blue-400"></i> Mes Réservations
                    </a>
                    <div class="border-t border-gray-700 my-1"></div>
                    <a href="logout.php" class="flex items-center gap-3 px-4 py-3 text-sm text-red-400 hover:bg-red-500/10 hover:text-red-300 transition">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Déconnexion
                    </a>
                </div>
            </div>
        </div>
    </div>
    </nav>

    <div class="pt-32 pb-10 bg-gradient-to-b from-blue-900/20 to-gray-950">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold mb-2">Trouvez votre <span class="text-blue-500">véhicule idéal</span></h1>
            <p class="text-gray-400">Explorez notre sélection de plus de 50 modèles premium</p>
        </div>
    </div>

    <main class="container mx-auto px-6 pb-20">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <aside class="w-full lg:w-1/4 space-y-8">
                <div class="glass p-6 rounded-2xl">
                    <h3 class="text-lg font-semibold mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-magnifying-glass text-blue-500"></i> Rechercher
                    </h3>
                    <div class="relative">
                        <input type="text" id="carSearch" placeholder="Modèle, marque..." 
                            class="w-full bg-gray-800/50 border border-gray-700 text-white text-sm rounded-xl focus:ring-2 focus:ring-blue-500 p-3 outline-none transition">
                    </div>
                </div>

                <div class="glass p-6 rounded-2xl">
                    <h3 class="text-lg font-semibold mb-4">Catégories</h3>
                    <div class="space-y-3">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" checked class="w-5 h-5 rounded border-gray-700 bg-gray-800 text-blue-600 focus:ring-blue-500">
                            <span class="text-gray-400 group-hover:text-white transition">Toutes les voitures</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="w-5 h-5 rounded border-gray-700 bg-gray-800 text-blue-600 focus:ring-blue-500">
                            <span class="text-gray-400 group-hover:text-white transition font-light">SUV / 4x4</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="w-5 h-5 rounded border-gray-700 bg-gray-800 text-blue-600 focus:ring-blue-500">
                            <span class="text-gray-400 group-hover:text-white transition font-light">Sport & Luxe</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="w-5 h-5 rounded border-gray-700 bg-gray-800 text-blue-600 focus:ring-blue-500">
                            <span class="text-gray-400 group-hover:text-white transition font-light">Électrique / Hybride</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" class="w-5 h-5 rounded border-gray-700 bg-gray-800 text-blue-600 focus:ring-blue-500">
                            <span class="text-gray-400 group-hover:text-white transition font-light">Citadine</span>
                        </label>
                    </div>
                </div>

                <div class="glass p-6 rounded-2xl">
                    <h3 class="text-lg font-semibold mb-4">Budget (par jour)</h3>
                    <input type="range" min="50" max="500" class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer accent-blue-500">
                    <div class="flex justify-between mt-2 text-xs text-gray-500">
                        <span>50€</span>
                        <span>500€</span>
                    </div>
                </div>
            </aside>

            <div class="w-full lg:w-3/4">
                <div class="flex justify-between items-center mb-8 bg-gray-900/50 p-4 rounded-xl border border-gray-800">
                    <span class="text-sm text-gray-400">Affichage de <span class="text-white font-bold">12</span> véhicules</span>
                    <select class="bg-transparent text-sm text-gray-300 outline-none cursor-pointer focus:text-blue-500">
                        <option class="bg-gray-900">Trier par: Prix croissant</option>
                        <option class="bg-gray-900">Trier par: Prix décroissant</option>
                        <option class="bg-gray-900">Trier par: Nouveautés</option>
                    </select>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div class="bg-gray-900 border border-gray-800 rounded-3xl overflow-hidden hover:border-blue-500/50 transition-all group">
                        <div class="relative h-52 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&w=800&q=80" alt="BMW" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute top-4 left-4 glass px-3 py-1 rounded-full text-xs font-semibold">BMW Série 5</div>
                            <button class="absolute top-4 right-4 w-8 h-8 rounded-full glass flex items-center justify-center hover:bg-red-500/20 hover:text-red-500 transition">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-end mb-6">
                                <div>
                                    <h3 class="text-xl font-bold">BMW M5 Competition</h3>
                                    <div class="flex items-center gap-4 mt-2 text-sm text-gray-400">
                                        <span><i class="fa-solid fa-gas-pump text-blue-500 mr-1"></i> Essence</span>
                                        <span><i class="fa-solid fa-gears text-blue-500 mr-1"></i> Auto</span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-2xl font-bold text-blue-500">180€</span>
                                    <span class="text-xs text-gray-500 block">/jour</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <a href="details.php?id=1" class="text-center py-3 rounded-xl border border-gray-700 text-sm font-medium hover:bg-gray-800 transition">Détails</a>
                                <button class="bg-blue-600 hover:bg-blue-500 text-white py-3 rounded-xl text-sm font-bold shadow-lg shadow-blue-500/20 transition">Réserver</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-900 border border-gray-800 rounded-3xl overflow-hidden hover:border-blue-500/50 transition-all group">
                        <div class="relative h-52 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&w=800&q=80" alt="Audi" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute top-4 left-4 glass px-3 py-1 rounded-full text-xs font-semibold">SUV</div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-end mb-6">
                                <div>
                                    <h3 class="text-xl font-bold">Audi Q8 S-Line</h3>
                                    <div class="flex items-center gap-4 mt-2 text-sm text-gray-400">
                                        <span><i class="fa-solid fa-bolt text-blue-500 mr-1"></i> Hybride</span>
                                        <span><i class="fa-solid fa-gears text-blue-500 mr-1"></i> Auto</span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-2xl font-bold text-blue-500">155€</span>
                                    <span class="text-xs text-gray-500 block">/jour</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <a href="#" class="text-center py-3 rounded-xl border border-gray-700 text-sm font-medium hover:bg-gray-800 transition">Détails</a>
                                <button class="bg-blue-600 hover:bg-blue-500 text-white py-3 rounded-xl text-sm font-bold shadow-lg shadow-blue-500/20 transition">Réserver</button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-900 border border-gray-800 rounded-3xl overflow-hidden hover:border-blue-500/50 transition-all group">
                        <div class="relative h-52 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=800&q=80" alt="Tesla" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute top-4 left-4 glass px-3 py-1 rounded-full text-xs font-semibold">Électrique</div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-end mb-6">
                                <div>
                                    <h3 class="text-xl font-bold">Tesla Model 3 Performance</h3>
                                    <div class="flex items-center gap-4 mt-2 text-sm text-gray-400">
                                        <span><i class="fa-solid fa-bolt text-blue-500 mr-1"></i> Électrique</span>
                                        <span><i class="fa-solid fa-gears text-blue-500 mr-1"></i> Auto</span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="text-2xl font-bold text-blue-500">130€</span>
                                    <span class="text-xs text-gray-500 block">/jour</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <a href="#" class="text-center py-3 rounded-xl border border-gray-700 text-sm font-medium hover:bg-gray-800 transition">Détails</a>
                                <button class="bg-blue-600 hover:bg-blue-500 text-white py-3 rounded-xl text-sm font-bold shadow-lg shadow-blue-500/20 transition">Réserver</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <footer class="bg-gray-900 border-t border-gray-800 pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center text-white text-xs">
                            <i class="fa-solid fa-car"></i>
                        </div>
                        <span class="text-xl font-bold text-white">MaBagnole</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Votre partenaire de confiance pour une expérience de conduite inoubliable. Louez la liberté, conduisez le futur.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Liens Rapides</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-blue-400 transition">À propos</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Conditions générales</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Politique de confidentialité</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Carrières</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Newsletter</h4>
                    <p class="text-gray-400 text-sm mb-4">Inscrivez-vous pour recevoir nos offres exclusives.</p>
                    <div class="flex">
                        <input type="email" placeholder="Votre email" class="bg-gray-800 text-white px-4 py-2 rounded-l-lg focus:outline-none focus:ring-1 focus:ring-blue-500 w-full text-sm">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-r-lg text-sm font-medium transition">
                            Ok
                        </button>
                    </div>
                    <div class="flex space-x-4 mt-6">
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-blue-600 hover:text-white transition"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-pink-600 hover:text-white transition"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-sky-500 hover:text-white transition"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-500 text-xs">&copy; 2024 MaBagnole. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    <script>
        const btn = document.getElementById('profileDropdownBtn');
    const menu = document.getElementById('profileDropdownMenu');

    btn.addEventListener('click', (e) => {
        e.stopPropagation();
        menu.classList.toggle('hidden');
    });

    // Close menu when clicking outside
    window.addEventListener('click', () => {
        if (!menu.classList.contains('hidden')) {
            menu.classList.add('hidden');
        }
    });
    </script>

    </body>
</html>