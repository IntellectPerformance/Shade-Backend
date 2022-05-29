# Shade-Backend
 The backend version of the cms

# Documentation
##### I made this CMS originally for my Habbo CMS. But it can be used for other projects aswell!

## Adding Routes
#### You can have multiple options for a specific route. 
###### If you want to get a page JUST for reviewing, you use the get(); Example:
```
$routes->get('/', 
	'Index\IndexController:view');
```
###### For data submits you need to create another route function called a post(); Example:

```
$routes->post('/submit', 
	'Index\IndexController:submitdata');
```

###### For fetching the submitted data get the html element, for example: name="username"
```
$data = [
   'name'  => $this->request->getVar('username'),
];
```
###### Shade-Backend has a rule validator service. How to use? Well easy! Example:

```
$rules = [
   'username'  => 'required|min_length[4]'
];

$errors = service('validate')->run($this->validate($rules));
        if($errors) {
            return redirect()->back()->with('errors', $errors); 
        }
```
###### ShadeCMS original uses IziToast for message display: <a href="https://izitoast.marcelodolza.com/">Documenation</a>

#### Backend Functions
 
Login: 		100% <br>
Register: 	100% <br>
SSO Generation: 100% <br>
BadgeShop: 	100% <br>
RCON: 		100% <br>
Staff Login: 	100% <br>

