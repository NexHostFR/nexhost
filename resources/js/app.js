import '../lib/jquery'

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('button[aria-expanded]').forEach(function(button) {
        button.addEventListener('click', function() {
            if(this.getAttribute('aria-expanded') === 'true') {
                this.setAttribute('aria-expanded', 'false');
                document.querySelector(`#${this.getAttribute('data-menu-target')}`).classList.add('hidden');
            } else {
                this.setAttribute('aria-expanded', 'true');
                document.querySelector(`#${this.getAttribute('data-menu-target')}`).classList.remove('hidden');
            }
        });
    });
});