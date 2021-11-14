# Change Log

## v2.1.2 (2021-11-14)

### Fixed
- Cambodia transform phone condition
- Set ID as default country if the country code is not found in config

## v2.1.1 (2021-11-12)

### Added
- Support EN with Indonesia validation

## v2.1.0 (2021-11-11)

### Added
New methods regarding to phone number
- `transform_phone()` 
- `validate_phone()`

## v2.0.2 (2021-11-10)

### Changed
- Update README.md

## v2.0.1 (2021-11-10)

### Changed
- Use `round()` for Cambodia nominal format
- Use `intval()` for Indonesia nominal format

## v2.0.0 (2021-11-09)

### Added
- Support nominal and currency formatting for Cambodia

### Changed
 - `Friskals\Countries\CountryServiceProviders` moves to `Friskals\Countries\Providers\CountryServiceProviders` (namespace changed).
 - Rename `Friskals\Countries\Helper` to `Friskals\Countries\CountryLoader`
 - Rename `Friskals\Countries\Libraries\Indonesia` to `Friskals\Countries\Libraries\ID`
 - Rename `Friskals\Countries\Helper()->getCountry('id')` to `Friskals\Countries\CountryLoader::country('id')`

## v1.0.0 (2021-11-09)

Initial Release

### Added
- Nominal and currency formatting for Indonesia
