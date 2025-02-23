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
        document.querySelector('.menu-burger').classList.remove("translate-x-0");
        document.querySelector('.menu-burger').classList.add("-translate-x-full");
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
    document.querySelector('.btn-burger').addEventListener('click', function() {
        if(this.getAttribute('aria-expanded') != 'true') {
            document.querySelector('.menu-burger').classList.remove("-translate-x-full");
            document.querySelector('.menu-burger').classList.add("translate-x-0");
            this.setAttribute('aria-expanded', 'true');
        } else {
            document.querySelector('.menu-burger').classList.remove("translate-x-0");
            document.querySelector('.menu-burger').classList.add("-translate-x-full");
            this.setAttribute('aria-expanded', 'false');
        }
    });
    document.querySelectorAll('.btn-sub-menu').forEach(function(element) {
        element.addEventListener('click', function() {
            if(this.getAttribute('aria-expanded') != 'true') {
                document.querySelectorAll('.sub-menu').forEach(function(secondElement) {
                    secondElement.classList.add('hidden')
                    secondElement.parentElement.querySelector('button').setAttribute('aria-expanded', 'false');
                })
                this.parentElement.querySelector('div').classList.remove('hidden')
                this.setAttribute('aria-expanded', 'true');
            } else {
                this.parentElement.querySelector('div').classList.add('hidden')
                this.setAttribute('aria-expanded', 'false');
            }
        })
    })
});