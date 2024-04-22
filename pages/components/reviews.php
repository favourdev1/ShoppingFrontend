  <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab" tabindex="0">
      <div class="my-8">
          <!-- row -->
          <div class="row">
              <div class="col-md-4 pb-0">
                  <div class="me-lg-12 mb-6 mb-md-0">
                      <div class="mb-5">
                          <!-- title -->
                          <h4 class="mb-3">Customer reviews</h4>
                          <span>
                              <!-- rating -->
                              <small class="text-warning">
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-half"></i>
                              </small>
                              <!-- <span class="ms-3">4.1 out of 5</span> -->
                              <small class="ms-3" id="global_rating">11,130 global ratings</small>
                          </span>
                      </div>
                      <div class="mb-8">
                          <!-- progress -->
                          <div class="d-flex align-items-center mb-2">
                              <div class="text-nowrap me-3 text-muted">
                                  <span class="d-inline-block align-middle text-muted">5</span>
                                  <i class="bi bi-star-fill ms-1 small text-warning"></i>
                              </div>
                              <div class="w-100">
                                  <div class="progress" style="height: 6px">
                                      <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                                      id="five_star_progress" 
                                          aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                              </div>

                          </div>
                          <!-- progress -->
                          <div class="d-flex align-items-center mb-2">
                              <div class="text-nowrap me-3 text-muted">
                                  <span class="d-inline-block align-middle text-muted" >4</span>
                                  <i class="bi bi-star-fill ms-1 small text-warning"></i>
                              </div>
                              <div class="w-100">
                                  <div class="progress" style="height: 6px">
                                      <div class="progress-bar bg-warning" role="progressbar"id="four_star_progress" style="width: 50%"
                                          aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
                                  </div>
                              </div>

                          </div>
                          <!-- progress -->
                          <div class="d-flex align-items-center mb-2">
                              <div class="text-nowrap me-3 text-muted">
                                  <span class="d-inline-block align-middle text-muted">3</span>
                                  <i class="bi bi-star-fill ms-1 small text-warning"></i>
                              </div>
                              <div class="w-100">
                                  <div class="progress" style="height: 6px">
                                      <div class="progress-bar bg-warning" role="progressbar" id="three_star_progress"  style="width: 35%"
                                          aria-valuenow="35" aria-valuemin="0" aria-valuemax="35"></div>
                                  </div>
                              </div>

                          </div>
                          <!-- progress -->
                          <div class="d-flex align-items-center mb-2">
                              <div class="text-nowrap me-3 text-muted">
                                  <span class="d-inline-block align-middle text-muted">2</span>
                                  <i class="bi bi-star-fill ms-1 small text-warning"></i>
                              </div>
                              <div class="w-100">
                                  <div class="progress" style="height: 6px">
                                      <div class="progress-bar bg-warning" role="progressbar" style="width: 22%"
                                      id="two_star_progress"
                                          aria-valuenow="22" aria-valuemin="0" aria-valuemax="22"></div>
                                  </div>
                              </div>

                          </div>
                          <!-- progress -->
                          <div class="d-flex align-items-center mb-2">
                              <div class="text-nowrap me-3 text-muted">
                                  <span class="d-inline-block align-middle text-muted">1</span>
                                  <i class="bi bi-star-fill ms-1 small text-warning"></i>
                              </div>
                              <div class="w-100">
                                  <div class="progress" style="height: 6px">
                                      <div class="progress-bar bg-warning" role="progressbar" style="width: 14%"
                                      id="one_star_progress" 
                                          aria-valuenow="14" aria-valuemin="0" aria-valuemax="14"></div>
                                  </div>
                              </div>

                          </div>
                      </div>
                      <!-- <div class="d-grid">
                          <h4>Review this product</h4>
                          <p class="mb-0">Share your thoughts with other customers.</p>
                          <a href="#" class="btn btn-outline-gray-400 mt-4 text-muted">Write the Review</a>
                      </div> -->
                  </div>
              </div>
              <!-- col -->
              <div class="col-md-8">
                  <div class="mb-10">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                          <div>
                              <!-- heading -->
                              <h4>Reviews</h4>
                          </div>
                          <!-- <div>
                              <select class="form-select">
                                  <option selected>Top Reviews</option>
                                  <option value="Most Recent">Most Recent</option>
                              </select>
                          </div> -->
                      </div>

                      <div id="reviewContainer">

                      </div>
                      <!-- <div class="d-flex border-bottom pb-6 mb-6">

                          <div class="ms-5">
                              <h6 class="mb-1">Shankar Subbaraman</h6>
                          
                              <p class="small">
                                  <span class="text-muted">30 December 2022</span>
                                  <span class="text-primary ms-3 fw-bold">Verified
                                      Purchase</span>
                              </p>
                             
                              <div class="mb-2">
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <span class="ms-3 text-dark fw-bold">Need to recheck the
                                      weight at delivery point</span>
                              </div>
                              
                              <p>
                                  Product quality is good. But, weight seemed less than
                                  1kg. Since it is being sent in open package, there is a
                                  possibility of pilferage in between.
                                  Sosmart sends the veggies and fruits through sealed
                                  plastic covers and Barcode on the weight etc. .
                              </p>
                              <div>
                                  <div class="border icon-shape icon-lg border-2">
                                     
                                      <img src="../assets/images/products/product-img-1.jpg" alt=""
                                          class="img-fluid" />
                                  </div>
                                  <div class="border icon-shape icon-lg border-2 ms-1">
                                     
                                      <img src="../assets/images/products/product-img-2.jpg" alt=""
                                          class="img-fluid" />
                                  </div>
                                  <div class="border icon-shape icon-lg border-2 ms-1">
                                     
                                      <img src="../assets/images/products/product-img-3.jpg" alt=""
                                          class="img-fluid" />
                                  </div>
                              </div>
                          
                              <div class="d-flex justify-content-end mt-4">
                                  <a href="#" class="text-muted">
                                      <i class="feather-icon icon-thumbs-up me-1"></i>
                                      Helpful
                                  </a>
                                  <a href="#" class="text-muted ms-4">
                                      <i class="feather-icon icon-flag me-2"></i>
                                      Report abuse
                                  </a>
                              </div>
                          </div>
                      </div> -->

                  </div>
                 
              </div>
          </div>
      </div>
  </div>



  <script>
      // Get the product_id from the URL parameter
      const urlParams = new URLSearchParams(window.location.search);
      const product_id = urlParams.get('id');

      const options = {
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric'
                };
             //fetch al reviews

      // find out why the review  is not working
      axios.get('http://localhost:8000/api/reviews/show/' + product_id, {
              headers: {
                  payloadRequest
              }
          })
          .then(function(response) {
              // handle success
              let reviews = response.data.data.review;
              reviewBreakdown( response.data.data)
              console.log(reviews);
        buildReview(reviews)

          })
          .catch(function(error) {
              // handle error
              console.log(error);
          })
          .then(function() {
              // always executed
          });


          function getStarRatingHTML(rating) {
    let starsHTML = '';
    const integerRating = parseInt(rating);

    for (let i = 0; i < 5; i++) {
        if (i < integerRating) {
            starsHTML += '<i class="bi bi-star-fill text-warning"></i>';
        } else {
            starsHTML += '<i class="bi bi-star text-warning"></i>';
        }
    }
    return starsHTML;
}

function buildReview(reviews){
    let reviewsContainer = document.getElementById('reviewContainer');
              if (reviews.length == 0) {
                  let reviewDiv = document.createElement('div');

                  reviewDiv.classList.add('d-flex', 'border-bottom', 'pb-6', 'mb-6');
                  reviewDiv.innerHTML = `
            <div class="ms-5">
                <h6 class="mb-1">No reviews yet</h6>
            </div>`
              } else {
                
                console.log(reviews)

                  reviews.forEach(review => {
                      let reviewDiv = document.createElement('div');
                      reviewDiv.classList.add('d-flex', 'border-bottom', 'pb-6', 'mb-6');
                      reviewDiv.innerHTML = `
            <div class="ms-1 col">
                <h6 class="mb-1">${review.firstname} ${review.lastname}</h6>
                <p class="small">
                    <span class="text-muted
                    ">${new Date(review.created_at).toLocaleString('en-US',options)}</span>
                  
                </p>
                <div class="mb-2">
            
                ${getStarRatingHTML(review.stars)}
       

                    <span class="ms-3 text-dark fw-bold">${review.heading}</span>
                </div>
                <p>
                    ${review.description}
                </p>

                

             
            </div>

            
            `;
            reviewsContainer.appendChild(reviewDiv);
                  })

              }

}

function reviewBreakdown(review){
    const five_star_progress = document.getElementById('five_star_progress');
const four_star_progress  = document.getElementById('four_star_progress');
const three_star_progress = document.getElementById('three_star_progress');
const two_star_progress = document.getElementById('two_star_progress');
const one_star_progress = document.getElementById('one_star_progress');

const one_star = review.one_star;
const two_star = review.two_star;
const three_star = review.three_star;
const four_star = review.four_star;
const five_star = review.five_star;

five_star_progress.style.width = five_star;
five_star_progress.setAttribute('aria-valuenow', five_star);

four_star_progress.style.width = four_star;
four_star_progress.setAttribute('aria-valuenow', four_star);

three_star_progress.style.width = three_star;
three_star_progress.setAttribute('aria-valuenow', three_star);

two_star_progress.style.width = two_star;
two_star_progress.setAttribute('aria-valuenow', two_star);

one_star_progress.style.width = one_star;
one_star_progress.setAttribute('aria-valuenow', one_star);

five_star_progress.setAttribute('aria-valuemax', review.total_stars_count);
four_star_progress.setAttribute('aria-valuemax', review.total_stars_count);
three_star_progress.setAttribute('aria-valuemax', review.total_stars_count);
two_star_progress.setAttribute('aria-valuemax', review.total_stars_count);
one_star_progress.setAttribute('aria-valuemax', review.total_stars_count);
const global_rating = document.getElementById('global_rating')
global_rating.innerHTML=review.global_rating+ " total ratings"


getStarRatingHTML(review.avg_rating)
}
  </script>

  
