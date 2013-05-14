We the people API proxy app.

There are three endpoints, they should be reachable via the following URLs:

** all three methods are accessible via GET method **
** if there is an error, return a 4xx error code **
** details about source data at https://petitions.whitehouse.gov/developers
   including JSON/REST api and downloadable SQL file **

/petitions/list.js during dev or preferably /petitions/ in the final app.

    - Get a list of petitions
    - Accepts the following parameters:
        - count={int} - retrieve count records
        - offset={int} - skip the first `offset` records
        - createdBefore={int unix timestamp} - retrieve records created before
        - createdAfter={int unix timestamp} - retrieve records created after
        - signatureMax={int} - retrieve records with no more than this
        - signatureMin={int} - retrieve records with at least this many
        - status={string} - only show results with this status
    - example:
    /petitions/?count=10&createdAfter=1367384400&status=responded

/petitions/518bcd94c988d43341000002/details.js during dev, preferably
/petitions/{id}/ in the final app

    - Get details about a petition
    - example:
    /petitions/518bcd94c988d43341000002/

/petitions/518bcd94c988d43341000002/signatures/list.js during dev, preferably
/petitions/{id}/signatures/ in the final app

    - Get a list of signatures for a petition
    - Accepts the following parameters:
        - count={int} - retrieve count signatures
        - offset={int} - skip this many signatures
        - zipcode={int} - show only signatures from this zipcode
        - createdBefore={int unix timestamp} - show signatures created before
        - createdAfter={int unix timestamp} - show signatures created after
    - example:
    /petitions/{id}/signatures/?count=30&createdAfter=1367384400


