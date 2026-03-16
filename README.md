# The Local Script

This is a web app designed to help actors and other theatre professionals know what's good around wherever they're working, be that decent local food outlets, coffee shops, or whatever else.

## Architecture

- User
  - `hasMany` Theatre
  - `hasMany` City
  - `hasMany` Outlet
  - `hasMany` Rating
- City
  - Name
  - Location (of what?)
  - `hasMany` Theatres
  - `belongsTo` User
- Theatre
  - Name
  - Location (GPS? Address?)
  - Google Maps link?
  - `belongsTo` City
  - `belongsToMany` Outlet
  - `belongsTo` User
- Outlet
  - Name
  - Location (GPS? Address?)
  - Serves
    - Food
    - Drink
    - Other
  - `belongsToMany` Theatre
  - `hasMany` Ratings
  - `belongsTo` User
- Rating
  - Stars (n/5)
  - Notes
  - Warnings
  - `belongsTo` Outlet
  - `belongsTo` User
