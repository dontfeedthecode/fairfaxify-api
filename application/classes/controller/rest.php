<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Extended controller that provides a common interface for producing a RESTful
 * interface with Kohana
 */
class Controller_Rest extends Controller
{
    /**
     * Response buffer to write JSON encoded data to
     * @var string
     */
    public $_response;
	
    /**
     * Article ID
     * (primary key on tbl.)
     * @var integer
     */
    protected $_id;
	
    /**
     * JSONP Callback
     * @var string
     */
    protected $_callback;

	/**
	 * Automatically executed after the controller action. Can be used to apply
	 * transformation to the request response, add extra output, and execute
	 * other custom code.
	 *
	 * @return void
	 */
    public function after()
    {
        if (in_array(Arr::get($_SERVER, 'HTTP_X_HTTP_METHOD_OVERRIDE', $this->request->method()), array(
                    HTTP_Request::PUT,
                    HTTP_Request::POST,
                    HTTP_Request::DELETE))) {
            $this->response->headers('cache-control', 'no-cache, no-store, max-age=0, must-revalidate');
        }
        // Always return as JSON
        $this->response->headers('Content-Type', 'application/javascript');
        // Set response body from buffer
        $this->response->body($this->_response);
    }

	/**
	 * Automatically executed before the controller action.
	 *
	 * @return void
	 */
    public function before()
    {
		$this->_id = (int) $this->request->param('id');
		$this->_callback = (isset($_GET['callback'])) ? $_GET['callback'] : false;
        return parent::before();
    }
	
	  

    /**
     * Encodes result arrays and binds JSONP callback function,
     * this is automatically passed into the controllers response.
     *
     * @return void
     */
    public function encode($data)
    {
        $this->_response = ($this->_callback) 
            ? $this->_callback. '(' . json_encode($data) . ');'
            : json_encode($data);
    }
	
    /**
     * Fetch ALL articles from server
     *
     * method: GET
     * URI: /articles
     *
     * @return object Encoded db result
     */
    public function action_articles()
    {
        try {
			// Load articles via query builder, auto-escaping and MySQL
			// injection prevention
            $articles = DB::select('id', 'header', 'description', 'thumbnailHref')
                ->from('articles')
                ->execute()
				->as_array();
			// Return all encoded articles
			$this->encode($articles);
        } catch (Database_Exception $e) {
            $this->encode(array(
                'error' => $e->getMessage()
            ));
        }
    }
	
    /**
     * Fetch ONE article from server
     *
     * method: GET
     * URI: /articles/<id>
     *
     * @return object Encoded db result
     */
    public function action_article()
    {
        try {
        	// Check if ID param has been passed, either load
        	// single result or pass back error
        	if($this->_id) {
				// Load article via query builder, auto-escaping and MySQL
				// injection prevention
	            $article = DB::select('id', 'header', 'description', 'heroImage', 'body')
	                ->from('articles')
					->where('id', '=', $this->_id)
	                ->execute()
					->as_array();
				// Check loaded start of object
				if($article) {
					// Return encoded article
					$this->encode($article);
				} else {
					// Return not found error
					$this->encode(array(
						'error' => 'Article not found.'
					));
				}
			} else {
	            $this->encode(array(
	                'error' => 'Problem loading article.'
	            ));
			}
        } catch (Database_Exception $e) {
            $this->encode(array(
                'error' => $e->getMessage()
            ));
        }
    }
}