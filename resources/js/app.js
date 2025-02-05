import '../lib/jquery'

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.open-menu[aria-expanded]').forEach(function(button) {
        button.addEventListener('click', function() {
            if(this.getAttribute('aria-expanded') === 'true') {
                this.setAttribute('aria-expanded', 'false');
                document.querySelector(`#${this.getAttribute('data-menu-target')}`).classList.add('hidden');
            } else {
                document.querySelectorAll(".menu").forEach(function(menu) {
                    menu.classList.add('hidden');
                })
                document.querySelectorAll(".open-menu[aria-expanded]").forEach(function(button) {
                    button.setAttribute('aria-expanded', 'false');
                })
                this.setAttribute('aria-expanded', 'true');
                document.querySelector(`#${this.getAttribute('data-menu-target')}`).classList.remove('hidden');
            }
        });
    });
    document.addEventListener('scroll', function() {
        document.querySelectorAll(".open-menu[aria-expanded]").forEach(function(button) {
            button.setAttribute('aria-expanded', 'false');
        });
        document.querySelectorAll(".menu").forEach(function(menu) {
            menu.classList.add('hidden');
        });
    });
    document.querySelectorAll('.open-group[aria-expanded]').forEach(function(button) {
        button.addEventListener('click', function() {
            if(this.getAttribute('aria-expanded') === 'true') {
                this.setAttribute('aria-expanded', 'false');
                document.querySelector(`#${this.getAttribute('data-group-target')}`).classList.add('hidden');
            } else {
                document.querySelectorAll(".productgroup").forEach(function(group) {
                    group.classList.add('hidden');
                })
                document.querySelectorAll(".open-group[aria-expanded]").forEach(function(button) {
                    button.setAttribute('aria-expanded', 'false');
                })
                this.setAttribute('aria-expanded', 'true');
                document.querySelector(`#${this.getAttribute('data-group-target')}`).classList.remove('hidden');
            }
        });
    });
});