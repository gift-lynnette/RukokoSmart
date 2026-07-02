USE rukoko_contacts;

-- Only run this if your services table is empty or doesn't yet match your live dropdown.
-- If you already ran the earlier seed with the full CCTV service list, you can skip this
-- or clear + reseed with: TRUNCATE TABLE services; then run the inserts below.

INSERT INTO services (service_name, display_order) VALUES
('CCTV Installation', 1),
('CCTV Repair', 2),
('Remote Monitoring', 3),
('Corporate Branding', 4),
('Vehicle Branding', 5),
('Promotional Materials', 6);
