@extends('manager.base')

@section('title', 'Inscription')

@section('body')
<main class="flex justify-center items-center h-screen">
    <form action="{{ route('register') }}" class="w-full sm:w-96 p-8 bg-white rounded-lg shadow-lg flex flex-col items-center" method="POST">
        <h1 class="text-center text-2xl font-semibold mb-4">Inscription - Code confidentiel</h1>
        <p class="mb-4 text-center text-sm text-gray-600">Un code vous a été envoyé par mail.</p>

        <!-- Saisie du code -->
        <div class="flex justify-between mb-6" style="gap: 10px;">
            <input class="form-input text-center w-12 h-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" type="text" maxlength="1" id="code1" required autofocus>
            <input class="form-input text-center w-12 h-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" type="text" maxlength="1" id="code2" required>
            <input class="form-input text-center w-12 h-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" type="text" maxlength="1" id="code3" required>
            <input class="form-input text-center w-12 h-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" type="text" maxlength="1" id="code4" required>
            <input class="form-input text-center w-12 h-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" type="text" maxlength="1" id="code5" required>
            <input class="form-input text-center w-12 h-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" type="text" maxlength="1" id="code6" required>
        </div>

        @csrf

        <!-- Champ caché pour envoyer le code complet -->
        <input type="hidden" name="_code" id="_code">
        <input type="hidden" name="etape" value="code_confidentiel">

        <!-- Bouton d'étape suivante -->
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
            Etape suivante
        </button>
    </form>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const inputs = Array.from(document.querySelectorAll('input[type="text"]')).filter(input => input.id !== '_code');
        const codeInput = document.getElementById('_code');

        const updateCodeInput = () => {
            const codeFinal = inputs.map(input => input.value).join('');
            codeInput.value = codeFinal;
        };

        inputs.forEach((input, index) => {
            input.addEventListener('input', () => {
                if (input.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
                updateCodeInput();
            });
        });

        inputs.forEach((input, index) => {
            input.addEventListener('keydown', (e) => {
                if (e.key === "Backspace" && input.value === '' && index > 0) {
                    inputs[index - 1].focus();
                }
                updateCodeInput();
            });
        });

        inputs.forEach((input, index) => {
            input.addEventListener('paste', (e) => {
                e.preventDefault();
                const pasteData = e.clipboardData.getData('text').trim();
                const pasteArray = pasteData.split('');

                pasteArray.forEach((char, i) => {
                    if (i < inputs.length) {
                        inputs[i].value = char;
                    }
                });

                const nextInput = inputs[Math.min(pasteArray.length, inputs.length) - 1];
                if (nextInput) {
                    nextInput.focus();
                }

                updateCodeInput();
            });
        });
    });
</script>
@endsection