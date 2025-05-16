<!-- Botão para abrir a modal
<button onclick="toggleModal()" class="bg-gray-800 text-white px-6 py-2 rounded-full uppercase text-sm hover:bg-gray-700 transition">
    Ver Lista de Presentes
</button> -->

<!-- Modal Background -->
<div id="giftModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden_">
    <!-- Modal Content -->
    <div class="bg-white rounded-xl p-8 w-full max-w-lg relative text-center font-sans py-4">

        <!-- Botão fechar -->
        <button onclick="toggleModal()" class="absolute top-3 right-4 text-gray-600 hover:text-black text-xl font-bold">
            &times;
        </button>

        <!-- Logo -->
        <div class="mb-6 h-28 w-28 mx-auto">
            <x-application-logo />
        </div>

        <!-- Título -->
        <h2 class="text-2xl uppercase tracking-widest font-semibold text-gray-800">Lista de Presentes</h2>
        <p class="uppercase text-gray-600 text-sm mt-1">Casamento</p>
        <p class="text-gray-700 text-lg font-medium mb-6">João Henrique & Maria Eduarda</p>

        <!-- Ramos decorativos -->
        <x-ramo-icon />
        <!-- Sugestão de cores -->
        <h3 class="text-xl uppercase text-gray-800 font-semibold mt-4 mb-2">Sugestão de Cores</h3>

        <div class="flex justify-center gap-4 mb-6">
            <div class="text-center">
                <div class="w-12 h-12 border border-gray-400 rounded-full bg-white mx-auto"></div>
                <span class="text-xs mt-1 block text-gray-600">BRANCO</span>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 rounded-full bg-black mx-auto"></div>
                <span class="text-xs mt-1 block text-gray-600">PRETO</span>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 rounded-full bg-gray-400 mx-auto"></div>
                <span class="text-xs mt-1 block text-gray-600">CINZA</span>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-300 to-gray-500 mx-auto"></div>
                <span class="text-xs mt-1 block text-gray-600">INOX</span>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 rounded-full bg-yellow-200 mx-auto" style="background-image: url('/images/bambu-texture.jpg'); background-size: cover;"></div>
                <span class="text-xs mt-1 block text-gray-600">BAMBU</span>
            </div>
        </div>

        <!-- PIX -->
        <x-ramo-icon />
        <p class="text-sm text-gray-700 mt-4">Caso queira nos presentear por Pix:</p>
        <p class="text-sm font-semibold text-gray-900">Código Nº Celular: 51993894913</p>

        <!-- Ramos decorativos -->
        <x-ramo-icon />
    </div>
</div>

<script>
    document.body.classList.toggle("overflow-hidden");

    function toggleModal() {
        const modal = document.getElementById("giftModal");
        modal.classList.toggle("hidden");
        document.body.classList.toggle("overflow-hidden");
    }

    document.addEventListener("click", function(event) {
        const modal = document.getElementById("giftModal");
        if (event.target === modal) {
            modal.classList.add("hidden");
            document.
            body.classList.remove("overflow-hidden");
        };
    })

    document.addEventListener("keydown", function(event) {
        if (event.key === "Escape") {
            const modal = document.getElementById("giftModal");
            modal.classList.add("hidden");
            document.body.classList.remove("overflow-hidden");
        }
    });
</script>