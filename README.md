[![Code Climate](https://codeclimate.com/github/Glucosio/glucosio-api/badges/gpa.svg)](https://codeclimate.com/github/Glucosio/glucosio-api)

# Glucosio has moved to Gitlab! [Visit our project repos on Github](https://gitlab.com/glucosio)

# glucosio-api
Glucosio's API for Diabetes Research
## api endpoint

http://api.glucosio.org/v1/readings

## method
POST

## example JSON array

(Content-Type: application/json)

````
{"readings":
  [
   {"value":70, "created_at": "2016-01-08:07:50:10", "user_id":123, "readingtype_id": 1},
   {"value":99, "created_at": "2016-01-08:09:45:03", "user_id":123, "readingtype_id": 2},
   {"value":90, "created_at": "2016-01-08:12:05:38", "user_id":123, "readingtype_id": 3}
  ]
}
````
## reading types

| id | reading type |
|----|------------------|
| 0  | other |
| 1  | before breakfast |
| 2	 |after breakfast |
| 3	 |before lunch |
| 4	 | after lunch |
| 5	 | before dinner |
| 6	 | after dinner |
| 7	 | night |
