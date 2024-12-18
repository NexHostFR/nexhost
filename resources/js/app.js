import '../lib/jquery'

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('button[aria-expanded]').forEach(function(button) {
        button.addEventListener('click', function() {
            if(this.getAttribute('aria-expanded') === 'true') {
                this.setAttribute('aria-expanded', 'false');
                document.querySelector(`#${this.getAttribute('data-menu-target')}`).classList.add('hidden');
            } else {
                document.querySelectorAll(".menu").forEach(function(menu) {
                    menu.classList.add('hidden');
                })
                document.querySelectorAll("button[aria-expanded]").forEach(function(button) {
                    button.setAttribute('aria-expanded', 'false');
                })
                this.setAttribute('aria-expanded', 'true');
                document.querySelector(`#${this.getAttribute('data-menu-target')}`).classList.remove('hidden');
            }
        });
    });
    document.addEventListener('scroll', function() {
        document.querySelectorAll("button[aria-expanded]").forEach(function(button) {
            button.setAttribute('aria-expanded', 'false');
        });
        document.querySelectorAll(".menu").forEach(function(menu) {
            menu.classList.add('hidden');
        });
    });
});