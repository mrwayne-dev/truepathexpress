<?php $pageTitle = 'Track Your Package'; ?>
<?php include_once __DIR__ . '/../../includes/header.php'; ?>

<!-- Hero -->
<section class="hero hero--page">
    <img src="/assets/images/sections/track-bg.png" alt="Package tracking" class="hero__bg">
    <div class="hero__overlay"></div>
    <div class="hero__content">
        <span class="hero__label"><i class="ph-bold ph-magnifying-glass"></i> Package Tracking</span>
        <h1 class="hero__title">Track Your Package</h1>
        <p class="hero__desc">Enter your tracking ID and email to view the current status of your shipment.</p>
    </div>
</section>

<!-- Tracking Form Section -->
<section class="tracking-section">
    <div class="container">
        <div class="tracking-form">
            <h3 class="tracking-form__title">Enter Your Details</h3>

            <form id="trackingForm">
                <div class="form-group">
                    <label class="form-label" for="trackEmail">Email Address</label>
                    <input type="email" id="trackEmail" name="email" class="form-input" placeholder="e.g. john.doe@example.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="trackId">Tracking ID</label>
                    <input type="text" id="trackId" name="tracking_id" class="form-input" placeholder="e.g. TPX-7A3F9B2C" required>
                </div>

                <button type="submit" class="btn btn--primary btn--lg" style="width: 100%;">
                    <i class="ph-bold ph-magnifying-glass"></i> Track Package
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Modals -->
<?php include_once __DIR__ . '/../../includes/payment-modal.php'; ?>
<?php include_once __DIR__ . '/../../includes/track-order-modal.php'; ?>

<script src="/assets/js/payment.js"></script>
<?php include_once __DIR__ . '/../../includes/footer.php'; ?>
