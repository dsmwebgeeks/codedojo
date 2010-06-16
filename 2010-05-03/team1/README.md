Team 1
======

Team 1 decided to follow a test-driven development approach using [Ruby on Rails](http://rubyonrails.org/) and [RSpec](http://rspec.info/). We lost some time early in the dojo configuring IDE key-mappings, etc. We made good progress on the URL-shortening business logic. Unfortunately, we ran out of time before we could implement the user interface.

Afterwards we decided that a lighter web framework like [Sinatra](http://www.sinatrarb.com/) would have been more appropriate for this exercise.

Our actual project from the coding dojo is probably not worth sharing, but this is an example of what we *wish* we had done.

To run this example:

1. Make sure you have Ruby and the following Ruby gems installed: active_record, haml, sinatra, sqlite3-ruby
2. Run <code>createdb.sh</code> to create a sqlite3 database.
3. Run <code>url-shortener.rb</code> to launch the application.
4. Point your browser to <http://localhost:4567>
