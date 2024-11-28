<div id="page-loader" style="display: none;">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<style>
    /* Fullscreen loader styles */
    #page-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8); /* semi-transparent background */
        z-index: 9999; /* Ensure it's above other elements */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .spinner {
        width: 40px;
        height: 40px;
        position: relative;
    }

    .double-bounce1, .double-bounce2 {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: #3498db;
        opacity: 0.6;
        position: absolute;
        top: 0;
        left: 0;
        animation: bounce 2.0s infinite ease-in-out;
    }

    .double-bounce2 {
        animation-delay: -1.0s;
    }

    @keyframes bounce {
        0%, 100% {
            transform: scale(0);
        } 
        50% {
            transform: scale(1);
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Show loader when page starts loading
        document.getElementById('page-loader').style.display = 'flex';

        // Hide loader when page is fully loaded
        window.onload = function () {
            document.getElementById('page-loader').style.display = 'none';
        };
    });
    $(document).on({
    ajaxStart: function () {
        $('#page-loader').show();
    },
    ajaxStop: function () {
        $('#page-loader').hide();
    }
});

</script>
