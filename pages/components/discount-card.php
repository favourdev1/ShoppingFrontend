<div class="col">
    <!-- card -->
    <div class="card card-product border-0 shadow-none">
        <div class="card-body px-1">
            <!-- badge -->
            <div class="text-center position-relative">

                <a
                    href="<?php echo "pages/shop-single.php?id=" . $id ?>"
                    class="position-relative"
                    style="background-color: rgba(0, 0, 0, 0.04);"
                >
                    <!-- img -->
                    <img
                        src="<?php echo $productImg ?>"
                        alt="<?= $productName; ?>"
                        class="mb-3 img-fluid rounded-4 w-100  "
                        style="background-color: rgba(0, 0, 0, 0.4); height: 208px !important; width: 208px; "
                    />
                    <div
                        class="col position-absolute top-0 start-0 h-100 "
                        style="background-color: rgba(0, 0, 0, 0.4); height: 208px !important; "
                    >

                    </div>

                    <span class="text-white  fw-bold position-absolute top-0 end-0 position small me-3 p-2 mt-2 "  style="border-radius:50px; background-color: rgba(0, 0, 0, 0.7);">
                    <?php echo $percentageDiscount."%" ?>
                    </span>
                </a>

                <!-- <div class="card-product-action bottom-0 mb-3">
                    <a
                        href="#!"
                        class="btn-action"
                        data-product-details='<?php echo json_encode($product); ?>'
                        onclick="showQuickView(this)"
                    >
                        <i
                            class="bi bi-eye"
                            data-bs-toggle="tooltip"
                            data-bs-html="true"
                            title="Quick View"
                        ></i>
                    </a>
                    <a
                        href="#!"
                        class="btn-action"
                        data-bs-toggle="tooltip"
                        data-bs-html="true"
                        title="Wishlist"
                    ><i class="bi bi-heart"></i></a>


                    <a
                        href="#!"
                        class="btn-action"
                        data-bs-toggle="tooltip"
                        data-bs-html="true"
                        title="cart"
                    ><i class="bi bi-cart"></i></a>
                </div> -->
            </div>
            
            <h2 class="fs-5 mb-0">
                <a
                    href="<?php echo "pages/shop-single.php?id=" . $id ?>"
                    class="text-inherit text-decoration-none fw-100"
                    style="font-weight:light"
                ><small><?php echo $productName ?></small></a>
            </h2>
            <div class="pt-0">
                <!-- rating -->
                <!-- <small class="text-warning ">
                    <i class="bi bi-star-fill small"></i>
                    <i class="bi bi-star-fill small"></i>
                    <i class="bi bi-star-fill small"></i>
                    <i class="bi bi-star-fill small"></i>
                    <i class="bi bi-star-half small"></i>
                </small> -->
                <!-- <span
                    class="text-muted small"
                    style="font-size:12px"
                >(149) sold</span> -->
            </div>
            <!-- price -->
            <div class="d-flex justify-content-between align-items-center mt-0 ">
                <div>
                    <?php if (!empty($regularPrice)) { ?>

                    <span class="text-danger fw-bold">
                        <span
                            class="small  fw-100 "
                            style="font-size:12px"
                        >
                            <?= CURRENCY; ?>
                        </span>
                        <span class="fs-5">

                            <?php echo  number_format($salesPrice) ?>
                        </span>
                    </span>

                    <span class="text-decoration-line-through text-muted small fw-100 fw-bold">
                        <span
                            class="small   "
                            style="font-size:12px"
                        >
                            <?= CURRENCY; ?>
                        </span>
                        <?php echo number_format($regularPrice) ?>
                    </span>

                    <?php } ?>

                </div>

            </div>

        </div>
    </div>
</div>