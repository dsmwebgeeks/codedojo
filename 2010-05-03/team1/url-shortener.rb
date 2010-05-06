#!/usr/bin/env ruby

require 'active_record'
require 'haml'
require 'sinatra'

ActiveRecord::Base.establish_connection(
  :adapter => 'sqlite3',
  :database => 'links.sqlite3'
)

module UrlShortener
  class Link < ActiveRecord::Base
    validates_presence_of :original, :shortened
    validates_uniqueness_of :original, :shortened
    validates_format_of :original, :with => /^http(s?):\/\/.*/
  end

  def self.shorten(original_url)
    link = Link.find_by_original(original_url)

    if link
      shortened = link.shortened
    else
      shortened = original_url.hash.to_s(36)
      Link.create!(:original => original_url, :shortened => shortened)
    end

    shortened
  end

  def self.original(shortened)
    link = Link.find_by_shortened(shortened)
    link.original
  end
end

get '/' do
  haml :index
end

post '/' do
  http_host = request.env['HTTP_HOST']
  @original_url = params[:url]
  shortened = UrlShortener.shorten(@original_url)
  @shortened_url = "http://#{http_host}/#{shortened}"
  haml :shortened
end

get '/:shortened' do
  original_url = UrlShortener.original(params[:shortened])
  redirect original_url
end

__END__

@@ layout
!!! XML
!!! 1.1
%html
  %head
    %title URL Shortener
  %body{:style => "font-family: sans-serif"}
    = yield

@@ index
%h1 URL Shortener
%form{:method => 'post'}
  %p
    Original URL
    %input{:type => "text", :name => 'url'}

@@ shortened
%h1 Shortened URL
%p
  %a{:href => @original_url}
    = @original_url
%p has been shortened to
%p
  %a{:href => @shortened_url}
    = @shortened_url
