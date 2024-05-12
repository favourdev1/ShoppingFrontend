// Define variables for the API routes
var endPoint = 'https://api.sosmartshopping.com/api';
var websiteurl = 'https://sosmartshopping.com';
// Authentication routes
const registerRoute = '/register';
const loginRoute = '/login';
const getUserRoute = '/get-user';

// Product routes
const discountProductRoute = '/products/discountproduct';
const productsRoute = '/products';
const searchProductRoute = '/products/search';
const getProductRoute = '/products/';
const similarProductRoute = '/products/similarproduct/';
const categoryRoute = '/category';
const categoryShowRoute = '/category/';
const newArrivalRoute = '/group/newArrivial';


//order Route 
const orderRoute = '/orders';
const updateOrderStatus = '/updateOrderStatus'


//review  route 
const reviewRoute = '/reviews'
const createReviewRoute = '/add';


// User profile routes
const userProfileRoute = '/profile/';
const updateProfileRoute = '/profile/update';

// Cart routes
const cartsRoute = '/carts';
const addOrUpdateCartItemRoute = '/carts/add/';
const updateCartItemRoute = '/carts/update/';
const ShippingCostRoute = '/carts/shippingCost/';
const deleteCartItemRoute = '/carts/delete/';

// wishlist routes
const wishlistsRoute = '/wishlists';
const addWishlistRoute = '/wishlists/add/';
const deleteWishlistRoute = '/wishlists/delete/';


// payment route
const paymentRoute = '/payment';
const sendPayment = '/payments/add';

// Address routes
const addressesRoute = '/addresses';
const addAddressRoute = '/addresses/add/';
const updateAddressRoute = '/addresses/update';
const setDefaultAddressRoute = '/addresses/setDefault/';
const deleteAddressRoute = '/addresses/deleteorder/';

// Admin routes
const adminProfileRoute = '/admin/profile';
const adminUpdateProfileRoute = '/admin/profile';
const profileDetailsRoute = '/admin/profileDetails/';
const makeAdminRoute = '/admin/users//makeadmin';
const removeAdminRoute = '/admin/users//removeadmin';
const adminCategoryRoute = '/admin/category';
const adminCategoryShowRoute = '/admin/category/';
const adminCategoryCreateRoute = '/admin/category/create';
const adminCategoryAddRoute = '/admin/category/add';
const adminCategoryEditRoute = '/admin/category//edit';
const adminCategoryUpdateRoute = '/admin/category/update/';
const adminCategoryUploadImageRoute = '/admin/category/upload-image';
const adminCategoryDeleteRoute = '/admin/category/delete/';
const adminProductsRoute = '/admin/products';
const adminProductShowRoute = '/admin/products/';
const adminProductAddRoute = '/admin/products/add';
const adminProductUpdateRoute = '/admin/products/';
const adminProductUploadImageRoute = '/admin/products/upload-image';
const adminProductDeleteRoute = '/admin/products/delete/';

//admin settings 
const adminSettingsRoute = '/admin_settings';
const updateofficeRoute = '/office/address';
const updateShippingcostRoute = '/shipping/cost';


//Email Route
const Email = '/email';
const sendEmail = '/email/subscribe';




const adminRoute = '/users';
const makeAdmin = '/users/makeadmin';
const removeAdmin = '/users/removeadmin';



//forgot password
const forgotPassword = '/forgot-password';
const resetPassword = '/reset-password';