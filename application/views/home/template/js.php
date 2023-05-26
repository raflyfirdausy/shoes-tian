<script src="<?= asset("shoes/") ?>assets/front/js/vendor/jquery-2.2.4.min.js"></script>
<script src="<?= asset("shoes/") ?>assets/front/js/vendor/popper.min.js"></script>
<script src="<?= asset("shoes/") ?>assets/front/js/jquery.easing.1.3.js"></script>
<script src="<?= asset("shoes/") ?>assets/front/js/vendor/bootstrap.min.js"></script>
<script src="<?= asset("shoes/") ?>assets/front/js/jquery.parallax-scroll.js"></script>
<script src="<?= asset("shoes/") ?>assets/front/js/dopeNav.js"></script>
<script src="<?= asset("shoes/") ?>assets/front/js/owl.carousel.min.js"></script>
<script src="<?= asset("shoes/") ?>assets/front/js/jquery.stellar.min.js"></script>
<script src="<?= asset("shoes/") ?>assets/front/js/jquery.counterup.min.js"></script>
<script src="<?= asset("shoes/") ?>assets/front/js/waypoints.min.js"></script>
<script src="<?= asset("shoes/") ?>assets/front/js/main.js"></script>
<script>
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #222}";
        document.body.appendChild(css);
    };
</script>